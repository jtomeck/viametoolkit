<?php
/**
 * Template part for displaying VIAME in Action Slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package VIAME Toolkit WP
 */

?>

<!-- VIAME in Action Slider -->
<?php if( have_rows('viame_in_action') ) : ?>
  <?php while( have_rows('viame_in_action') ) : the_row(); ?>
    <article class="section home-viame-in-action">
      <header class="content has-text-centered">
        <h2><?php echo the_sub_field('viame_in_action_title'); ?></h2>
      </header>
      <!-- VIAME in Action Slider -->
      <div class="carousel">
        <?php if( have_rows('viame_in_action_slider') ) : ?>
          <?php $i = 0; while( have_rows('viame_in_action_slider') ) : the_row(); $i++; ?>
            <div class="item-<?php echo $i; ?>">
              <?php
                // Variables
                $image = get_sub_field('viame_in_action_slider_image');
                $link = get_sub_field('viame_in_action_slider_link');
                $blurb = get_sub_field('viame_in_action_slider_blurb');
              ?>
              <div class="card">
                <img src="<?php echo $image; ?>" alt="" class="carousel-image">
                <p class="carousel-blurb"><?php echo $blurb; ?> <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a></p>
              </div>
            </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
