<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

elgg_register_event_handler('init', 'system', 'membersmap_init');

define('MEMBERSMAP_GENERAL_YES', 'yes'); // general purpose string for yes
define('MEMBERSMAP_GENERAL_NO', 'no'); // general purpose string for no

/**
 * MembersMap plugin initialization functions.
 */
function membersmap_init() {
    // load amap maps api libraries if it's enabled. If not, it will not work
    if (elgg_is_active_plugin("amap_maps_api")) {
        elgg_load_library('elgg:amap_maps_api');
    
        // Site navigation: add if enabled in settings
        if (amap_ma_check_if_map_menu_item('membersmap')) {
            $item = new ElggMenuItem('membersmap', elgg_echo('membersmap:menu'), 'membersmap');
            elgg_register_menu_item('site', $item);
        }
    }

    // Add admin menu item
    elgg_register_admin_menu_item('configure', 'membersmap', 'settings');

    // Extend CSS
    elgg_extend_view('css/elgg', 'membersmap/css');

    // extend group main page 
    elgg_extend_view('groups/tool_latest', 'membersmap/group_module');

    // add the group members maps tool option
    add_group_tool_option('membersmap', elgg_echo('membersmap:group:enablemaps'), true);

    // Register a page handler, so we can have nice URLs
    elgg_register_page_handler('membersmap', 'membersmap_page_handler');

    // Register widget
    elgg_register_widget_type('membersmap', elgg_echo("membersmap:wg:title"), elgg_echo("membersmap:wg:detail"), array('profile'), false);
    elgg_register_widget_type('allmembersmap', elgg_echo("membersmap:wg:alltitle"), elgg_echo("membersmap:wg:alldetail"), array('dashboard'), false);
    elgg_register_widget_type('groupmembersmap', elgg_echo("membersmap:widget:group:title"), elgg_echo("membersmap:widget:group:detail"), array('groups'), false);

    // register plugin hooks
    elgg_register_plugin_hook_handler("public_pages", "walled_garden", "membersmap_walled_garden_hook");
    
    // Register a handler for create members
    if (membersmap_is_geolocation_enabled()) {
        elgg_extend_view('page/elements/footer', 'membersmap/geolocate');
    }

    // Register actions admin
    $action_path = elgg_get_plugins_path() . 'membersmap/actions/membersmap';
    elgg_register_action('membersmap/admin/general_options', "$action_path/admin/settings.php", 'admin');
    elgg_register_action('membersmap/nearby_search', "$action_path/nearby_search.php", 'public');
    elgg_register_action('membersmap/live_search', "$action_path/live_search.php");
    elgg_register_action('membersmap/geolocate', "$action_path/geolocate.php");

    // Extend members tabs - start
    $list_types = array();
    if (amap_ma_check_if_add_tab_on_entity_page('membersmap'))
        array_push ($list_types, 'membersmap');
    if (membersmap_is_geolocation_enabled())
        array_push ($list_types, 'live_map');    
    
    foreach ($list_types as $type) {
        elgg_register_plugin_hook_handler('members:config', 'tabs', "members_nav_$type");
    }
    // Rebuild and extend members tabs - end
}

// Extend members tabs
function members_nav_membersmap($hook, $type, $returnvalue, $params) {
    $returnvalue['membersmap'] = array(
        'title' => elgg_echo('membersmap'),
        'url' => "membersmap",
    );
    return $returnvalue;
}

// Extend members tabs with online geolocated users
function members_nav_live_map($hook, $type, $returnvalue, $params) {
    $returnvalue['live_map'] = array(
        'title' => elgg_echo('membersmap:live_map'),
        'url' => "membersmap/live",
    );
    return $returnvalue;
}

/**
 *  Dispatches membersmap pages.
 *
 * @param array $page
 * @return bool
 */
function membersmap_page_handler($page) {
    $vars = array();
    $vars['page'] = $page[0];
        
    $resource_vars = array();
    switch ($page[0]) {
         case "live":
            echo elgg_view_resource('membersmap/live_search', $resource_vars);
            break;
        
        default:
            echo elgg_view_resource('membersmap/nearby', $resource_vars);
            break;
    }
    
    return true;
}

/**
 * Allow members map to be visible in public for walled garden sites
 *
 * @param string $hook
 * @param string $type
 * @param array $return
 * @param array $params
 * @return array
 */
function membersmap_walled_garden_hook($hook, $type, $return, $params) {
    $add = array();
    $add[] = 'membersmap';
    $add[] = 'membersmap/.*';

    if (is_array($return))
        $add = array_merge($add, $return);

    return $add;
}

// Check if membersmap is enabled for global map 
function membersmap_is_geolocation_enabled() {
    $geo_live = elgg_get_plugin_setting('geo_live', 'membersmap');

    if ($geo_live == AMAP_MA_GENERAL_YES) {
        return true;
    }

    return false;
}