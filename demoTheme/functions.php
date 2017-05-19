<?php

	function j_rescources() {
		wp_enqueue_style('style', get_stylesheet_uri());
	}


	// to ensure it actual ' j_rescources ' runs.
	add_action('wp_enqueue_scripts', 'j_rescources');


	/*  Registers the theme location with wordpress
			'theme_location' => 'primary'
			'theme_location' => 'footer'
	*/
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
	));

?>
