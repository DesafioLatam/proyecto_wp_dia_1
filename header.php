<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body id="page-top">

	<!-- Navigation -->
	  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	    <div class="container">
	      <a class="navbar-brand js-scroll-trigger" href="#page-top">

					<?php
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
					?>

	      </a>
	      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

				<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'container_class' => 'collapse navbar-collapse',
							'menu_class' => 'navbar-nav ml-auto'
						) );
					?>
				<?php } ?>

	    </div>
	  </nav>
