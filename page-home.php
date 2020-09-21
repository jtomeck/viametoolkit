<?php
/**
 * The template for the Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package VIAME Toolkit WP
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero' ); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-home' ); ?>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
