<?php
/**
 * Template part for displaying Latest News shortcode
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */

?>

<?php $latest_news = get_field('viame_latest_news');
if( $latest_news ) : ?>
  <article class="home-latest-news section">
    <header class="content has-text-centered">
      <h2><?php echo $latest_news['viame_latest_news_title']; ?></h2>
    </header>
    <div class="articles content">
      <?php echo do_shortcode( $latest_news['viame_latest_news_shortcode'] ); ?>
    </div>
  </article>
<?php endif; ?>
