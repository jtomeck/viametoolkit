<?php
/**
 * Template part for displaying action cards on the homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package VIAME Toolkit WP
 */

?>

<!-- Action Cards -->
<?php if( have_rows('viame_action_cards') ) : ?>
  <div class="action-cards columns is-centered is-variable is-5">
  <?php while( have_rows('viame_action_cards') ) : the_row(); ?>
    <div class="column is-one-quarter">
      <?php
        // Variables
        $icon = get_sub_field('viame_action_card_icon');
        $link = get_sub_field('viame_action_card_link');
      ?>
      <a class="card" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
        <?php if( $icon ) : ?>
          <img src="<?php echo $icon; ?>" alt="" class="card-icon">
        <?php endif; ?>
        <span class="card-label">
          <?php echo $link['title']; ?>
        </span>
      </a>
    </div>
  <?php endwhile; ?>
  </div>
<?php endif; ?>
