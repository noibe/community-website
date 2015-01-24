<?php

	$defaults = array(
		'default-image'          => get_template_directory_uri() . '/img/home.jpg',
		'flex-height'            => true,
		'flex-width'             => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => true,
		'default-text-color'     => '#ffffff',
	);

	add_theme_support( 'custom-header', $defaults );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

	function parsed_site_title(){

		$title = explode(' ', get_bloginfo('name'));

		$prefixtitle = array_slice($title, 0, -1);
		$prefixtitle = implode(" ", $prefixtitle);

		$last_word = "<b>".array_pop($title)."</b>";

		return $prefixtitle." ".$last_word;

	}

	function site_description(){

		if (get_bloginfo('description') != ""){

			echo '<h3 class="site-description">'.get_bloginfo('description').'</h3>';

		}

	}

	function baw_hack_wp_title_for_home( $title ) {

  		if( empty( $title ) && ( is_home() || is_front_page() ) ) {

    		return 'Início | ';

  		}

	  	return $title;
	}

	add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );

?>