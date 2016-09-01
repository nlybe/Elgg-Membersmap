<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

if (!elgg_is_logged_in()) {
    register_error(elgg_echo("membersmap:geolocation:user_not_logged_in"));
    forward(REFERER);
}

if (!elgg_is_active_plugin("amap_maps_api")) {
    register_error(elgg_echo("membersmap:settings:amap_maps_api:notenabled"));
    forward(REFERER);
}

elgg_require_js("membersmap/live_search");

elgg_load_library('elgg:amap_maps_api');
elgg_load_library('elgg:amap_maps_api_geo');

// Retrieve map width 
$mapwidth = amap_ma_get_map_width();
// Retrieve map height
$mapheight = amap_ma_get_map_height();

if (amap_ma_check_if_add_tab_on_entity_page('membersmap')) {
    elgg_push_breadcrumb(elgg_echo('members'), "members");
}

// set breadcrumb
elgg_push_breadcrumb(elgg_echo('membersmap'), 'membersmap');
elgg_push_breadcrumb(elgg_echo('membersmap:live_map'));

// load the search form only in global view
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
    $tabs[$type]['selected'] = ( $type == 'live_map');
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

