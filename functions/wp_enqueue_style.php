<?php

	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Styles */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/css/bootstrap.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('fontAwesome', get_parent_theme_file_uri('/assets/css/font-awesome.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('magnificPopup', get_parent_theme_file_uri('/assets/css/magnific-popup.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');;
		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,700');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');

		/* Enqueue Style */
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('fontAwesome');
		wp_enqueue_style('magnificPopup');
		wp_enqueue_style('googleFonts');
		wp_enqueue_style('mainStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>
