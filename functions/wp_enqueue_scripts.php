<?php

	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		//wp_register_script('jQuery1', get_parent_theme_file_uri() . '/assets/js/lib/jquery-1.12.4.min.js', null, null, true);
		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.2.1', true);
		wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
		wp_register_script('flexslider', get_parent_theme_file_uri('/assets/js/lib/jquery.flexslider.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/js/lib/bootstrap.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('easingJquery', get_parent_theme_file_uri('/assets/js/lib/jquery.easing.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('scrollReveal', get_parent_theme_file_uri('/assets/js/lib/scrollreveal.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('magnificPopup', get_parent_theme_file_uri('/assets/js/lib/jquery.magnific-popup.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/functions.js'), array('jQuery3'), $theme_data->get( 'Version' ), true);

		/* Enqueue Scripts */
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('easingJquery');
		wp_enqueue_script('scrollReveal');
		wp_enqueue_script('magnificPopup');
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>
