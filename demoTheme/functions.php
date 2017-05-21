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



	/*
		Gets the parent page ID of the current page.
		returns the ID of the parent page.
	*/
	function get_parent_page_id() {

		global $post;

		//if the page has a parent
		if ($post -> $post_parent) {

			// get_post_ancestors() returns an array of all parents and grand parents.
			// array_reverse() is used so the top value is now the first value.
			$ancestors = array_reverse(get_post_ancestors($post->ID));

			// $ancestors[0] returns the first parent
			return $ancestors[0];

		}//if

		return $post->ID;

	}//get_parent_page_id


 // Does the page has children ?
	function has_children() {
		global $post;

		$pages = get_pages('child_of=' . $post->ID);

		return count($pages);

	}//has_children


?>
