<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$entity = elgg_extract('entity', $vars);

$box_color = elgg_extract('box_color', $vars);

// If image support get the icon.
$icon = elgg_view('output/img', array(
    'src' => $entity->getIconURL('tiny'),
    'class' => "elgg-photo",
));

$output = '<div class="map_entity_block '.$box_color.'" >';
$output .= $icon;
$output .= '<a id="'.$entity->getGUID().'" class="entity_m">'.$entity->name.'</a>';
$output .= '<br />'.$entity->location;
if ($entity->getVolatileData('distance_from_user')) {
    $output .= '<br />'.$entity->getVolatileData('distance_from_user');
}
$output .= '</div>';

echo $output;

