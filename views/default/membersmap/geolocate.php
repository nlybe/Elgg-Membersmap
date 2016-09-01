<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$user = elgg_get_logged_in_user_entity();
if ($user) {
    
    $to_update = true;
    if ($user->live_time) {
        $geo_live_time = elgg_get_plugin_setting('geo_live_time', 'membersmap');
        $last_updated = time() - $user->live_time;
    
        if ($geo_live_time > $last_updated)
            $to_update = false;
    }
    
    if ($to_update) {
        elgg_require_js("membersmap/geolocation");
        //echo '<div>'.$user->live_lat.', '.$user->live_lng.'</div>';
    }
}



