define(function(require) {
    var elgg = require("elgg");
    var $ = require("jquery");

    $(document).ready(function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }        
    });
});

function showPosition(position) {
    
    elgg.action('membersmap/geolocate', {
        data: {
            s_lat: position.coords.latitude,
            s_lng: position.coords.longitude
        },
        success: function (result) {
            if (result.error) {
                elgg.register_error(result.msg);
            } else {
                console.log("Success -> Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude);
            }
        },
        complete: function () {
            // do nothing
        }

    });     
}

    




