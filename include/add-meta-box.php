<?php 
rs::metabox(array(
	'title' => 'Contact Form',
	'layout' => 'single',
	'rules' => array(
		'post_type' => 'page',
		'page_template'=>'page-services.php'
	),
	'context' => 'normal',
	'priority' => 'default',
	'controls' => array(
		array(
			'name' => 'ctf_shortcode',
			'type'  => 'text',
			'label'  => 'shortcode',
		)
	)
));
?>