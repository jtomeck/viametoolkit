<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VIAME Toolkit WP
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css">
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class( $post->post_name ); ?>>
	<div id="page" class="site">
		<?php bulmapress_skip_link_screen_reader_text(); ?>
		<header id="header">
			<nav id="site-navigation" class="navbar" role="navigation">
        <div class="container">
  				<div class="navbar-brand">
            <?php if( function_exists('the_custom_logo') ) : ?>
  					  <?php the_custom_logo(); ?>
            <?php else : ?>
              <?php bulmapress_home_link('navbar-item'); ?>
              <?php bulmapress_blog_description('navbar-item is-muted'); ?>
            <?php endif; ?>
  					<?php bulmapress_menu_toggle(); ?>
  				</div>
  				<div class="navbar-menu">
  					<div class="navbar-start"></div>
  					<?php bulmapress_navigation(); ?>
  				</div>
        </div>
			</nav>
		</header>

		<div id="content" class="site-content">
