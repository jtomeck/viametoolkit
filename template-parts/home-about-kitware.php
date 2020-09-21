<?php
/**
 * Template part for displaying VIAME in Action Slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */

?>

<!-- About Kitware -->
<?php
$group = get_field('viame_about_kitware');
if( $group ): ?>

  <?php // Vars
    $title = $group['viame_about_title'];
    $blurb = $group['viame_about_blurb'];
  ?>

  <article class="home-about-kitware section">
    <header class="content has-text-centered">
      <h2><?php echo $title; ?></h2>
      <div class="about-blurb has-text-centered">
        <?php echo $blurb; ?>
      </div>
    </header>
    <?php
    $footer = $group['viame_about_footer'];
    if( $footer ): ?>
      <footer class="columns content is-centered">
        <div class="column is-one-third">
          <?php echo $footer['viame_footer_text']; ?>
        </div>
        <div class="column is-one-fifth">
          <a href="<?php echo $footer['viame_footer_button']['url']; ?>" target="<?php echo $footer['viame_footer_button']['target']; ?>" class="button">
            <?php echo $footer['viame_footer_button']['title']; ?>
          </a>
        </div>
      </footer>
    <?php endif; ?>
    <div class="is-overlay"></div>
  </article>
<?php endif; ?>
