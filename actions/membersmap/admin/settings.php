<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */
 
$plugin = elgg_get_plugin_from_id('membersmap');

$params = get_input('params');
foreach ($params as $k => $v) {
	if (!$plugin->setSetting($k, $v)) {
		register_error(elgg_echo('plugins:settings:save:fail', array('membersmap')));
		forward(REFERER);
	}
}


system_message(elgg_echo('membersmap:settings:save:ok'));
forward(REFERER);
