define(function (require) {
    var elgg = require('elgg');
    var $ = require('jquery');
    require("amap_ma_oms_js");
    
    // Initialize map vars
    var map_settings = require("amap_maps_api/settings");
    var gm = google.maps;  
    var map;
    var mapTypeIds = [];
    var markers = []; 	
    var markerBounds = new google.maps.LatLngBounds();
    var mc;
    var circle = new google.maps.Circle();
    
    // retrieve available map layers
    var layer_x = map_settings['layers'];
    $.each($.parseJSON(layer_x), function (item, value) {
        mapTypeIds.push(value);  
    });    
   
    $(document).ready(function () {
        // Initialize map vars
        infowindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(map_settings['d_location_lat'],map_settings['d_location_lon']);
        var mapOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeControlOptions: {
                mapTypeIds: mapTypeIds
            },
        };

        map = new gm.Map(document.getElementById("map"), mapOptions);
        map.setMapTypeId(map_settings['default_layer']);

        map.mapTypes.set("OSM", new google.maps.ImageMapType({
            getTileUrl: function(coord, zoom) {
                // See above example if you need smooth wrapping at 180th meridian
                return map_settings['osm_base_layer'] + zoom + "/" + coord.x + "/" + coord.y + ".png";
            },
            tileSize: new google.maps.Size(256, 256),
            name: "OpenStreetMap",
            maxZoom: 18
        }));  
        
        // reset markers
        if (markers.length > 0) {
            for (var i = 0; i < markers.length; i++) {
              markers[i].setMap(null);
            }
            markers = [];
            markerBounds = new google.maps.LatLngBounds();
            
            if (map_settings['cluster']) {
                mc.clearMarkers();
            }            
        }
        
        // Spiderfier feature
        var oms = new OverlappingMarkerSpiderfier(map,{markersWontMove: true, markersWontHide: true, keepSpiderfied: true});
        
        elgg.action('membersmap/live_search', {
            data: {

            },
            success: function (result) {
                if (result.error) {
                    elgg.register_error(result.msg);
                } else {
                    var result_x = result.map_objects;
                    $.each($.parseJSON(result_x), function (item, value) {

                        var myLatlng = new google.maps.LatLng(value.lat,value.lng);
                        var marker = new google.maps.Marker({
                            map: map,
                            position: myLatlng,
                            title: value.title,
                            icon: value.map_icon,
                            id: 'marker_'+value.guid
                        });   

                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.setContent('<div class="infowindow">'+value.info_window+'</div>');
                            infowindow.open(map, this);
                        });  

                        oms.addMarker(marker);  // Spiderfier feature
                        markers.push(marker);


                        markerBounds.extend(myLatlng);
                        map.fitBounds(markerBounds);                    

                    });  

                    if (map_settings['cluster']) {
                        mcOptions = {
                            styles: [
                                {
                                    height: 53,
                                    url: elgg.normalize_url('/mod/amap_maps_api/vendors/js-marker-clusterer/images/m1.png'),
                                    width: 53
                                },
                                {
                                    height: 56,
                                    url: elgg.normalize_url('/mod/amap_maps_api/vendors/js-marker-clusterer/images/m2.png'),
                                    width: 56
                                },
                                {
                                    height: 66,
                                    url: elgg.normalize_url('/mod/amap_maps_api/vendors/js-marker-clusterer/images/m3.png'),
                                    width: 66
                                },
                                {
                                    height: 78,
                                    url: elgg.normalize_url('/mod/amap_maps_api/vendors/js-marker-clusterer/images/m4.png'),
                                    width: 78
                                },
                                {
                                    height: 90,
                                    url: elgg.normalize_url('/mod/amap_maps_api/vendors/js-marker-clusterer/images/m5.png'),
                                    width: 90
                                }
                            ],
                            maxZoom: map_settings['cluster_zoom']
                        };                    
                        //init clusterer with your options
                        mc = new MarkerClusterer(map, markers, mcOptions);
                    }

                    if (result.sidebar) {
                        $('#map_side_entities').html(result.sidebar);

                        $('.map_entity_block').click(function() {
                            var tmp_attr = $(this).find('a.entity_m');
                            var object_id = tmp_attr.attr('id');
                            for (var i = 0; i < markers.length; i++) {
                                if (markers[i].id === "marker_" + object_id) {
                                    var latLng = markers[i].getPosition(); // returns LatLng object
                                    google.maps.event.trigger(markers[i], 'click');
                                    break;
                                }
                            }                                
                        });

                        $('.map_entity_block a.entity_m').click(function() {
                            var object_id = $(this).attr('id');
                            for (var i = 0; i < markers.length; i++) {
                                if (markers[i].id === "marker_" + object_id) {
                                    var latLng = markers[i].getPosition(); // returns LatLng object
                                    google.maps.event.trigger(markers[i], 'click');
                                    break;
                                }
                            }                                
                        });                            
                    }                 
                }
            },
            complete: function () {

            }

        }); 
        
        return false;
    });


});
