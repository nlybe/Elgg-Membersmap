<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

if (!elgg_is_xhr()) {
    register_error('Sorry, Ajax only!');
}

if (!elgg_is_logged_in()) {
    register_error(elgg_echo("membersmap:geolocation:user_not_logged_in"));
}

$user = elgg_get_logged_in_user_entity();

// get variables
$s_lat = get_input("s_lat");
$s_lng = get_input("s_lng");

if (isset($s_lat) && isset($s_lng)) {
    
    $user->live_time = time();
    $user->live_lat = $s_lat;
    $user->live_lng = $s_lng;

    if ($user->save()) {
        $msg = 'success';
        $error = false;
    }
    else {
        $msg = 'error';
        $error = true;
    }

}


$result = array(
    'error' => $error,
    'msg' => $msg,
);

echo json_encode($result);
exit;
