<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

if (!elgg_is_active_plugin("amap_maps_api")) {
    echo elgg_format_element('p', [], elgg_echo("membersmap:settings:amap_maps_api:notenabled"));
    return;
}

elgg_load_library('elgg:amap_maps_api');

// get number of users to display
$noofusers = isset($vars['entity']->noofusers) ? $vars['entity']->noofusers : 0;
if (!is_numeric($noofusers))
    $noofusers = 0; // all users

// Set map width 
$mapwidth = '98%';
// Retrieve map height
$mapheight = (int) $vars['entity']->mapheight;
if($mapheight == '' || !is_numeric($mapheight)){
    $mapheight = '300';
}

$body_vars = array();
$body_vars['s_action'] = 'membersmap/nearby_search';
$body_vars['noofusers'] = $noofusers;
$content .=  elgg_view_form('membersmap/newest_members', $form_vars, $body_vars); 
$content .= elgg_view('amap_maps_api/map_box', array(
    'mapwidth' => $mapwidth,
    'mapheight' => $mapheight.'px',
)); 

$map_url = elgg_view('output/url', array(
    'href' => elgg_normalize_url("membersmap"),
    'text' => elgg_echo('membersmap:map:detailed').' <i class="fa fa-angle-double-right" aria-hidden="true"></i>',
    'title' => $lg->title,
    'is_trusted' => true,
));      
$content .= elgg_format_element('p', ['style' => 'text-align:right; margin: 5px 0 0;'], $map_url);

echo $content;
	

