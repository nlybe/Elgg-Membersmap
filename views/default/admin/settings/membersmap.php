<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$tab = get_input('tab', 'general_options');

echo elgg_view('navigation/tabs', array(
	'tabs' => array(
		array(
			'text' => elgg_echo('membersmap:settings:tabs:general_options'),
			'href' => '/admin/settings/membersmap',
			'selected' => ($tab == 'general_options'),
		),
		array(
			'text' => elgg_echo('membersmap:settings:tabs:users_geolocation'),
			'href' => '/admin/settings/amap_maps_api?tab=users_geolocation',
			'selected' => ($tab == 'users_geolocation'),
		),
	)
));

switch ($tab) {
	/* OBS
	case 'users_geolocation':
		echo elgg_view('admin/settings/membersmap/users_geolocation');
		break;
	*/
		
	default:
	case 'general_options':
		echo elgg_view('admin/settings/membersmap/general_options');
		break;
}
