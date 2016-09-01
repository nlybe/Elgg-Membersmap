<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$plugin = elgg_get_plugin_from_id('membersmap');

// add tab on elgg members page
$customtab = $plugin->customtab;
if(empty($customtab)){
	$customtab = MEMBERSMAP_GENERAL_YES;
}   
$potential_yesno = array(
    MEMBERSMAP_GENERAL_NO => elgg_echo('membersmap:settings:no'),
    MEMBERSMAP_GENERAL_YES => elgg_echo('membersmap:settings:yes'),
); 

// initial choice for loading map
$initial_load = $plugin->initial_load;
if (!$initial_load)
	$initial_load = 'all';
	
$options = array();
$options[elgg_echo('membersmap:settings:initial_load:all')] = 'all';
$options[elgg_echo('membersmap:settings:initial_load:newest')] = 'newest';
$options[elgg_echo('membersmap:settings:initial_load:mylocation')] = 'location';
	
$initial = '<div class="amap_settings_box">';
$initial .= '<div class="elgg-subtext">'.elgg_echo('membersmap:settings:initial_load:note').'</div>';
$initial .= elgg_view('input/radio', array('name' => 'params[initial_load]', 'value' => $initial_load, 'options' => $options));
$initial .= '</div>';

// no of newest users
$initial .= '<div class="amap_settings_box">';
$initial .= "<div class='txt_label'>" . elgg_echo('membersmap:settings:initial_load:newest_no') . ": </div>";
$initial .= elgg_view('input/text', array('name' => 'params[newest_no]', 'value' => (is_numeric($plugin->newest_no)?$plugin->newest_no:AMAP_MA_NEWEST_NO_DEFAULT), 'class' => 'txt_small'));
$initial .= "<span class='elgg-subtext'>".elgg_echo('membersmap:settings:initial_load:newest_no:note')."</span>";
$initial .= '</div>';

// default radius
$initial .= '<div class="amap_settings_box">';
$initial .= "<div class='txt_label'>" . elgg_echo('membersmap:settings:initial_load:mylocation_radius') . ": </div>";
$initial .= elgg_view('input/text', array('name' => 'params[mylocation_radius]', 'value' => (is_numeric($plugin->mylocation_radius)?$plugin->mylocation_radius:AMAP_MA_RADIUS_DEFAULT), 'class' => 'txt_small'));
$initial .= "<span class='elgg-subtext'>".elgg_echo('membersmap:settings:initial_load:mylocation_radius:note')."</span>";
$initial .= '</div>';
echo elgg_view_module("inline", elgg_echo('membersmap:settings:initial_load:title'), $initial);

// show list on sidebar
$sidebar_list = $plugin->sidebar_list;
if(empty($sidebar_list)){
	$sidebar_list = MEMBERSMAP_GENERAL_NO;
}    
$sidebar_list_view = '<div class="amap_settings_box">';
$sidebar_list_view .= elgg_view('input/dropdown', array('name' => 'params[sidebar_list]', 'value' => $sidebar_list, 'options_values' => $potential_yesno));
$sidebar_list_view .= "<span class='elgg-subtext'>" . elgg_echo('membersmap:settings:sidebar_list:note') . "</span>";
$sidebar_list_view .= '</div>';
echo elgg_view_module("inline", elgg_echo('membersmap:settings:sidebar_list'), $sidebar_list_view);

// Add "Map of Members" tab on Elgg Members Page
$memberstabfield = elgg_view('input/dropdown', array('name' => 'params[customtab]', 'value' => $customtab, 'options_values' => $potential_yesno));
$memberstabfield .= "<span class='elgg-subtext'>" . elgg_echo('membersmap:settings:memberstab:note') . "</span>";
echo elgg_view_module("inline", elgg_echo('membersmap:settings:memberstab'), $memberstabfield);

// add menu item on elgg site menu
$maponmenu = geo_live_time;
if(empty($maponmenu)){
    $maponmenu = MEMBERSMAP_GENERAL_YES;
}    

$maponmenufield = elgg_view('input/dropdown', array('name' => 'params[maponmenu]', 'value' => $maponmenu, 'options_values' => $potential_yesno));
$maponmenufield .= "<span class='elgg-subtext'>" . elgg_echo('membersmap:settings:maponmenu:note') . "</span>";
echo elgg_view_module("inline", elgg_echo('membersmap:settings:maponmenu'), $maponmenufield);


// enable geolocation and live map
$geo_live = $plugin->geo_live;
if(empty($geo_live)){
    $geo_live = MEMBERSMAP_GENERAL_YES;
}    

$geo_live_field = elgg_view_input('dropdown', array(
    'name' => 'params[geo_live]',
    'value' => $geo_live,
    'options_values' => $potential_yesno,
    'label' => elgg_echo('membersmap:settings:geo_live:enable'),
    'help' => elgg_echo('membersmap:settings:geo_live:enable:note'),
));
$geo_live_field .= elgg_view_input('text', array(
    'name' => 'params[geo_live_time]',
    'value' => ($geo_live_time->geo_live_time?$geo_live_time->geo_live_time:60),
    'label' => elgg_echo('membersmap:settings:geo_live:geo_live_time'),
    'help' => elgg_echo('membersmap:settings:geo_live:geo_live_time:note'),
    'style' => 'width: 50px;',
));
echo elgg_view_module("inline", elgg_echo('membersmap:settings:geo_live'), $geo_live_field);

/*
// set if show 'search by name' form
$searchbyname = $plugin->searchbyname;
if(empty($searchbyname)){
        $searchbyname = MEMBERSMAP_GENERAL_YES;
}    

$searchbynamefield = elgg_view('input/dropdown', array('name' => 'params[searchbyname]', 'value' => $searchbyname, 'options_values' => $potential_yesno));
$searchbynamefield .= "<span class='elgg-subtext'>" . elgg_echo('membersmap:settings:searchbyname:note') . "</span>";
echo elgg_view_module("inline", elgg_echo('membersmap:settings:searchbyname'), $searchbynamefield);
*/

// set default icon
$markericon = $plugin->markericon;
if(empty($markericon)){
	$markericon = 'smiley';
}    
$potential_icon = array(
    "user_icon_tiny" => elgg_echo('membersmap:settings:markericon:user_icon_tiny'),
    "user_icon_small" => elgg_echo('membersmap:settings:markericon:user_icon_small'),
    "blue-light" => elgg_echo('membersmap:settings:markericon:blue-light'),
    "blue" => elgg_echo('membersmap:settings:markericon:blue'),
    "green" => elgg_echo('membersmap:settings:markericon:green'),
    "grey" => elgg_echo('membersmap:settings:markericon:grey'),
    "orange" => elgg_echo('membersmap:settings:markericon:orange'),
    "pink" => elgg_echo('membersmap:settings:markericon:pink'),
    "purple-light" => elgg_echo('membersmap:settings:markericon:purple-light'),
    "purple" => elgg_echo('membersmap:settings:markericon:purple'),
    "red" => elgg_echo('membersmap:settings:markericon:red'),
    "yellow" => elgg_echo('membersmap:settings:markericon:yellow'),
); 

$map_icon = elgg_view('input/dropdown', array('name' => 'params[markericon]', 'value' => $markericon, 'options_values' => $potential_icon));
$map_icon .= "<span class='elgg-subtext'>" . elgg_echo('membersmap:settings:markericon:note') . "</span>";
echo elgg_view_module("inline", elgg_echo('membersmap:settings:markericon'), $map_icon);

echo elgg_view('input/submit', array('value' => elgg_echo("save")));
