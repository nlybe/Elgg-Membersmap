<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

if (!elgg_is_active_plugin("amap_maps_api")) {
    register_error(elgg_echo("membersmap:settings:amap_maps_api:notenabled"));
    forward(REFERER);
}

elgg_load_library('elgg:amap_maps_api');
// elgg_load_library('elgg:amap_maps_api_geocoder'); // OBS
elgg_load_library('elgg:amap_maps_api_geo');

$user = elgg_get_logged_in_user_entity();

if (amap_ma_not_permit_public_access()) {
    gatekeeper();
}

// Retrieve map width 
$mapwidth = amap_ma_get_map_width();
// Retrieve map height
$mapheight = amap_ma_get_map_height();

if (amap_ma_check_if_add_tab_on_entity_page('membersmap')) {
    elgg_push_breadcrumb(elgg_echo('members'), "members");
}

// set default parameters
$limit = get_input('limit', 0);
$title = elgg_echo('membersmap:all');
$options = array('type' => 'user', 'full_view' => false);

// get variables
$s_location = get_input("l");
$s_radius = (int) get_input("r");
$s_keyword = get_input("q");
$showradius = get_input("sr");
// get initial load option from settings
$initial_load = elgg_get_plugin_setting('initial_load', 'membersmap');

if (($s_location)) {
    $search_radius_txt = '';
    $s_radius = ($s_radius ? $s_radius : AMAP_MA_DEFAULT_RADIUS);
    $search_radius_txt = $s_radius;

    // retrieve coords of location asked, if any
    $coords = amap_ma_geocode_location($s_location);

    if ($coords) {
        $s_radius = amap_ma_get_default_radius_search($s_radius);
        $search_location_txt = $s_location;
        $s_lat = $coords['lat'];
        $s_long = $coords['long'];

        if ($s_lat && $s_long) {
            $options = add_order_by_proximity_clauses($options, $s_lat, $s_long);
            $options = add_distance_constraint_clauses($options, $s_lat, $s_long, $s_radius);
        }
        $title = elgg_echo('membersmap:members:nearby:search', array($search_location_txt));
    }

    // if special params asked, then forget the initial load option from settings
    $initial_load = '';
}

$options['limit'] = $limit;
$options['metadata_name_value_pairs'][] = array('name' => 'location', 'value' => '', 'operand' => '!=');


// set breadcrumb
elgg_push_breadcrumb(elgg_echo('membersmap'));

// load the search form only in global view
$body_vars = array();
$body_vars['s_action'] = 'membersmap/nearby_search';
$body_vars['initial_location'] = $search_location_txt;
$body_vars['initial_radius'] = $search_radius_txt;
$body_vars['initial_keyword'] = $s_keyword;
$body_vars['initial_load'] = $initial_load;
if ($user->location) {
    $body_vars['my_location'] = $user->location;
    if (isset($initial_load) && $initial_load == 'location') {
        $body_vars['initial_location'] = $user->location;
    }
}
$form_vars = array('enctype' => 'multipart/form-data');

$content = elgg_view_form('amap_maps_api/nearby', $form_vars, $body_vars);
$content .= elgg_view('amap_maps_api/map_box', array(
    'mapwidth' => $mapwidth,
    'mapheight' => $mapheight,
));

$sidebar = '';
$layout = 'one_column';
if (amap_ma_check_if_add_sidebar_list('membersmap')) {
    $layout = 'content';
    $sidebar = elgg_view('amap_maps_api/sidebar_elist', array(
        'mapheight' => $mapheight,
        'list_view' => 'membersmap/sidebar'
    ));
}

$tabs = elgg_trigger_plugin_hook('members:config', 'tabs', null, array());
foreach ($tabs as $type => $values) {
    $tabs[$type]['selected'] = ( $type == 'membersmap');
}
$filter = elgg_view('navigation/tabs', array('tabs' => $tabs));

$params = array(
    'content' => $content,
    'sidebar' => $sidebar,
    'title' => $title,
    'filter' => $filter,
);

$body = elgg_view_layout($layout, $params);

echo elgg_view_page($title, $body);

