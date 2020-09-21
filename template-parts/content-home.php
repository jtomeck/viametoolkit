<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<article class="home-about-viame section">
	<div class="container">
		<header class="content has-text-centered">
      <?php bulmapress_the_title('is-2', FALSE); ?>
		</header><!-- .entry-header -->

		<div class="content entry-content has-text-centered">
			<?php the_content(); ?>

      <?php // Calls to Action
      get_template_part( 'template-parts/home-action-cards' ); ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->

<?php // VIAME in Action Slider
get_template_part( 'template-parts/home-viame-slider' ); ?>

<?php // Latest News
get_template_part( 'template-parts/home-latest-news' ); ?>

<?php // Deep Dive
get_template_part( 'template-parts/home-deep-dive' ); ?>

<?php // About Kitware
get_template_part( 'template-parts/home-about-kitware' ); ?>
