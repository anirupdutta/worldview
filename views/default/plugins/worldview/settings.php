<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$insert_view = elgg_view('worldviewsettings/extend');

$bing_app_id_string = elgg_echo('Bing Application ID');
$bing_app_id_view = elgg_view('input/text', array(
	'name' => 'params[bing_app_id]',
	'value' => $vars['entity']->bing_app_id,
	'class' => 'text_input',
));


$settings = <<<__HTML
<div>$insert_view</div>
<div>$bing_app_id_string $bing_app_id_view</div>
__HTML;

echo $settings;

?>
