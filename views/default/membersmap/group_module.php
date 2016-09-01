<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$group = elgg_get_page_owner_entity();

if ($group->membersmap_enable == "no") {
	return true;
}

if (!elgg_is_active_plugin("amap_maps_api")) {
    echo elgg_format_element('p', [], elgg_echo("membersmap:settings:amap_maps_api:notenabled"));
    return;
}

echo elgg_view('groups/profile/module', array(
    'title' => elgg_echo('membersmap:group'),
    'content' => elgg_view('widgets/groupmembersmap/content'),
    'all_link' => '',
));

