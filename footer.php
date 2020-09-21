<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */

$footer_text = get_theme_mod( 'viame_footer_text', '');
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="has-text-centered py-5">
			<div class="site-info">
				<?php echo $footer_text; ?>
			</div><!-- .site-info -->
		</div>
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<?php if( is_front_page() ) : ?>
<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>
<script>
bulmaCarousel.attach('.carousel', {
  pagination: 1,
	slidesToScroll: 1,
	slidesToShow: 3
});
</script>
<?php endif; ?>

</html>
