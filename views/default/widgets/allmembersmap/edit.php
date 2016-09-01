<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */


$noofusers = elgg_view('input/dropdown', array(
    'name' => 'params[noofusers]',
    'value' => $vars['entity']->noofusers,
    'options' => array(1,10, 50, 100, 500, 1000, 2000, 'All')
));


?>

<div>
    <?php echo elgg_echo('membersmap:wg:alldetail:no'); ?>:
    <?php echo $noofusers; ?>
</div>

<?php
$mapheight = $vars['entity']->mapheight;
if($mapheight == '' || !is_numeric($mapheight)){
    $mapheight = '300';
} 

$height_box = elgg_echo("membersmap:widgets:settings:mapheight");
$height_box .= elgg_view('input/text', array('name' => 'params[mapheight]', 'value' => $mapheight, 'style' => 'width: 100px;' ));
echo elgg_format_element('div', ['class' => 'clear_box'], $height_box);
