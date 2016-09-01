<?php
/**
 * Elgg LeagueManager Plugin
 * @package leaguemanager
 */

elgg_require_js("amap_maps_api/amap_search");

$output .= elgg_view('input/hidden', array(
    'name' => 's_radius', 
    'id' => 's_radius', 
    'value' => '',
));
$output .= elgg_view('input/hidden', array(
    'name' => 'initial_load', 
    'id' => 'initial_load', 
    'value' => 'newest', 
));
$output .= elgg_view('input/hidden', array(
    'name' => 'change_title', 
    'id' => 'change_title', 
    'value' => 0, 
));
$output .= elgg_view('input/hidden', array(
    'name' => 'group_guid', 
    'id' => 'group_guid', 
    'value' => $vars['group_guid'], 
));
$output .= elgg_view('input/hidden', array(
    'name' => 'noofusers', 
    'id' => 'noofusers', 
    'value' => $vars['noofusers']
));
$output .= elgg_view('input/hidden', array(
    'name' => 's_action', 
    'id' => 's_action', 
    'value' => $vars['s_action'] 
));

$output .= elgg_view('input/hidden', array(
    'name' => 's_change_title', 
    'id' => 's_change_title', 
    'value' => 0 
));
$output .=  elgg_view('input/hidden', array(
	'value' => elgg_echo('amap_maps_api:search:submit'),
	'class' => 'elgg-button elgg-button-submit nearby_btn', 
	'id' => 'nearby_btn', 
));

echo $output;
	
