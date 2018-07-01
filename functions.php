<?php 
function dl_enqueue_styles_child() { 
	//llama al style del theme padre. 
	wp_register_style('parent-theme', get_parent_theme_file_uri('style.css'),null, null, null); 
	wp_enqueue_style('parent-theme'); 
	wp_register_style('style2', get_theme_file_uri('assets/css/style2.css'),null, null, null); 
	wp_enqueue_style('style2');


wp_enqueue_script('bxslider', get_parent_theme_file_uri('/js/jquery.bxSlider.min.js'));
wp_enqueue_script('superfish', get_parent_theme_file_uri('/js/superfish.js'));
wp_enqueue_script('effects', get_parent_theme_file_uri('/js/effects.js')); 
	
} 
add_action('wp_enqueue_scripts', 'dl_enqueue_styles_child');
 ?>