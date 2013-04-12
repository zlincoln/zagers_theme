<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));

		register_sidebar( array(
			'name' => 'Tumblr Widget Area',
			'id' => 'tumblr-widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'
		));
    }
    
    //Add main nav menu
    register_nav_menu( 'main-nav', 'Main Navigation Bar' );
    
    //add featured image and thumbnail capabilities
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'feat-thumb', 500, 300 );
    add_image_size( 'cat_thumb', 999, 210 );
    
?>