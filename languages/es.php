<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$spanish = array(

    //Menu items and titles
    'membersmap' => "Mapa",
    'membersmap:menu' => "Mapa",
    'membersmap:all' => "Mapa",
    'membersmap:allmembers' => "Todos los usuarios",
    'membersmap:membersof' => "Usuarios de %s",
    'membersmap:map' => "Mapa",
    
    //tabs
    'membersmap:label:all' => "Todos los usuarios",
    'membersmap:label:friends' => "Mis Amigos",
    'membersmap:label:online' => "Usuarios Online",
    
    //search 
    'membersmap:search' => "Buscar por Zona",
    'membersmap:search:location' => "lugar",
    'membersmap:search:radius' => "radio (metros)",
    'membersmap:search:radius:meters' => "radio (metros)",
    'membersmap:search:radius:km' => "radio (km)",
    'membersmap:search:radius:miles' => "radio (millas)",
    'membersmap:search:meters' => "metros",
    'membersmap:search:km' => "km",
    'membersmap:search:miles' => "millas",    
    'membersmap:search:showradius' => "Marcar Area",
    'membersmap:search:submit' => "Buscar",
    'membersmap:searchnearby' => "Usuarios cercanos",
    'membersmap:mylocationsis' => "Mi posicion es: ",
    'membersmap:searchbyname' => "Buscar por Nombre",
    'membersmap:search:name' => "nombre",
    'membersmap:search:searchname' => "Busqueda de usuarios por %s y proximidad",
    'membersmap:search:usernotfound' => "Usuarios no encontrados",
    'membersmap:search:usersfound' => "Usuarios encontrados",
    'membersmap:search:around' => "Usuarios cercanos no encontrados",
 
    //groups
    'membersmap:group' => "Mapa del Grupo",
    'membersmap:group:none' => "No hay miembros en el grupo",
    'membersmap:group:enablemaps' => "Activar mapa para el grupo",
    
    //js alerts
    'membersmap:map:1' => "Por favor, incluya una procedencia valida en su perfil",
    'membersmap:map:2' => "Direccion no valida para la busqueda",
    'membersmap:map:3' => "Geocode incorrecto por la siguiente razon",
    
    // settings
    'membersmap:settings:google_maps' => 'Google Maps settings',
    'membersmap:settings:google_api_key' => 'Enter your Google API key',
    'membersmap:settings:google_api_key:clickhere' => 'Go to <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a> to get your "Google API key". <br />(<strong>Note:</strong> the API key is NOT required. Only if you want stats on your api usage, or if you have a paid API account the key is needed)',
    'membersmap:settings:map_width' => 'Width of map',
    'membersmap:settings:map_width:how' => 'Numeric value (e.g. 500) or % (e.g. 100%)',
    'membersmap:settings:map_height' => 'Height of map',
    'membersmap:settings:map_height:how' => 'Numeric value (e.g. 500)',    
    'membersmap:settings:defaultlocation' => 'Default location address',     
    'membersmap:settings:defaultlocation:note' => 'Enter a valid location address (postal address or postal code or city or country... e.g. 73100, Greece)', 
    'membersmap:settings:defaultzoom' => 'Default map zoom',     
    'membersmap:settings:defaultzoom:note' => 'Enter a numeric value for zoom',    
    'membersmap:settings:cluster' => 'Use cluster feature of Google Maps', 
    'membersmap:settings:cluster:no' => 'No', 
    'membersmap:settings:cluster:yes' => 'Yes', 
    'membersmap:settings:cluster:note' => 'Select Yes for clustering nearby members on map.<br />If disabled, when multiple markers are located at the same or nearby location will be splitted out so they will be clickable.', 
    'membersmap:settings:markericon' => 'Marker Icon', 
    'membersmap:settings:markericon:blue-light' => 'Blue light', 
    'membersmap:settings:markericon:blue' => 'Blue', 
    'membersmap:settings:markericon:green' => 'Green', 
    'membersmap:settings:markericon:grey' => 'Grey', 
    'membersmap:settings:markericon:orange' => 'Orange', 
    'membersmap:settings:markericon:pink' => 'Pink', 
    'membersmap:settings:markericon:purple-light' => 'Purple light', 
    'membersmap:settings:markericon:purple' => 'Purple', 
    'membersmap:settings:markericon:red' => 'Red', 
    'membersmap:settings:markericon:yellow' => 'Yellow', 
    'membersmap:settings:markericon:note' => 'Select the color of marker for members on map', 
    'membersmap:settings:searchbyname' => 'Search members by name', 
    'membersmap:settings:searchbyname:no' => 'No', 
    'membersmap:settings:searchbyname:yes' => 'Yes', 
    'membersmap:settings:searchbyname:note' => 'Select if display "Search members by name" form (sidebar). ',  
    'membersmap:settings:unitmeas' => 'Distance Unit of Measurement', 
    'membersmap:settings:unitmeas:meters' => 'Meters', 
    'membersmap:settings:unitmeas:km' => 'Kilometers', 
    'membersmap:settings:unitmeas:miles' => 'Miles',
    'membersmap:settings:unitmeas:note' => 'Select Unit of Measurement will be used in searching.',   
    'membersmap:settings:memberstab' => 'Add "Map of Members" tab on Elgg Members Page', 
    'membersmap:settings:memberstab:note' => 'Select if you want to add a "Map of Members" tab on Elgg Members Page (domain/members).<br /><strong>Important</strong>: You have to put Membersmap plugin after Members plugin in Administration/Configure/Plugins',    
    'membersmap:settings:maponmenu' => 'Add "Map of Members" item on site menu', 
    'membersmap:settings:maponmenu:note' => 'Select if you want to add a "Map of Members" item on site menu. ',      
    'membersmap:settings:no' => 'No', 
    'membersmap:settings:yes' => 'Yes',
    'membersmap:settings:batchusers' => 'Batch Users Geolocation',
    'membersmap:settings:batchusers:start' => 'Start Geolocation',
    'membersmap:settings:batchusers:note' => 'If you already members on your Elgg site, click on this button for converting users location to coordinates.<br />You have to do it <strong>just once</strong> when you start using this plugin.',
    
    // widget
    'membersmap:wg:title' => 'Mapa', 
    'membersmap:wg:detail' => 'Muestra tu posicion', 
    'membersmap:zoom' => 'Zoom', 
);

add_translation("es", $spanish);
