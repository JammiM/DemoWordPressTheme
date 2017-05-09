<?php

	function j_rescources() {
		wp_enqueue_style('style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'j_rescources');

?>
