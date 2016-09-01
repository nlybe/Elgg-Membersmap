<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$tabs = array();

if (amap_ma_check_if_newest_tab('membersmap'))	 {
	$tabs['newest'] = array(
		'title' => elgg_echo('membersmap:label:newest'),
		'url' => "membersmap/newest",
		'selected' => $vars['selected'] == 'newest');
}

if (elgg_is_logged_in()) {
	$tabs['all'] = array(
		'title' => elgg_echo('membersmap:label:all'),
		'url' => "membersmap",
		'selected' => $vars['selected'] == 'all');
	$tabs['online'] = array(
		'title' => elgg_echo('membersmap:label:online'),
		'url' => "membersmap/online",
		'selected' => $vars['selected'] == 'online');
	$tabs['friends'] = array(
		'title' => elgg_echo('membersmap:label:friends'),
		'url' => "membersmap/friends",
		'selected' => $vars['selected'] == 'friends');

    echo elgg_view('navigation/tabs', array('tabs' => $tabs));
}
