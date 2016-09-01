<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

if (!elgg_is_xhr()) {
    register_error('Sorry, Ajax only!');
    forward(REFERRER);
}

if (!elgg_is_active_plugin("amap_maps_api")) {
    register_error(elgg_echo("membersmap:settings:amap_maps_api:disabled"));
    forward(REFERER);
}
	
elgg_load_library('elgg:amap_maps_api');
elgg_load_library('elgg:amap_maps_api_geo');


$title = elgg_echo('membersmap:all');
$options = array(
    "type" => "user",
    "full_view" => false,
    'limit' => get_input('noofusers', 0),
    'offset' => get_input('proximity_offset', 0),
    'seconds' => 600,
    'count' => false
);
//$options['metadata_name_value_pairs'][] = array('name' => 'location', 'value' => '', 'operand' => '!=');
$entities = amap_ma_get_online_users_map($options);

$map_objects = array();
if ($entities) {
    foreach ($entities as $entity) {
        $entity = amap_ma_set_entity_additional_info($entity, 'name', 'description', $entity->location);
    }
        
    foreach ($entities as $e) {
        if ($e->live_lat && $e->live_lng)  {
            $object_x = array();
            $object_x['guid'] = $e->getGUID();
            $object_x['title'] = amap_ma_remove_shits($e->getVolatileData('m_title'));;
            $object_x['description'] = amap_ma_get_entity_description($e->getVolatileData('m_description'));
            $object_x['location'] = elgg_echo('amap_maps_api:location', array(amap_ma_remove_shits($e->getVolatileData('m_location'))));	
            $object_x['lat'] = $e->live_lat;
            $object_x['lng'] = $e->live_lng;
            $object_x['icon'] = $e->getVolatileData('m_icon');
            $object_x['other_info'] = $e->getVolatileData('m_other_info');
            $object_x['map_icon'] = $e->getVolatileData('m_map_icon');
            $object_x['info_window'] = $object_x['icon'].' '.$object_x['title'];
            $object_x['info_window'] .= ($object_x['location']?'<br/>'.$object_x['location']:'');
            $object_x['info_window'] .= ($object_x['other_info']?'<br/>'.$object_x['other_info']:'');
            $object_x['info_window'] .= ($object_x['description']?'<br/>'.$object_x['description']:'');            
            array_push($map_objects, $object_x);        
        }
    }
    
    $sidebar = '';
    if (amap_ma_check_if_add_sidebar_list('membersmap')) {
        $box_color_flag = true;
        foreach ($entities as $entity) {
            if ($e->live_lat && $e->live_lng)  {
                $sidebar .= elgg_view('membersmap/sidebar', array('entity' => $entity, 'box_color' => ($box_color_flag ? 'box_even' : 'box_odd')));
                $box_color_flag = !$box_color_flag;
            }
        }
    }
} else {
    $content = elgg_echo('amap_maps_api:search:personalized:empty');
}

$result = array(
    'error' => false,
    'title' => $title,
    'content' => $content,
    'map_objects' => json_encode($map_objects),
    'sidebar' => $sidebar,
);

// release variables
unset($entities);
unset($map_objects);

echo json_encode($result);
exit;
