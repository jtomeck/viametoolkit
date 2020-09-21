<?php
/**
 * Template part for displaying hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package VIAME Toolkit WP
 */

// Hero Vars
$main_headline = get_theme_mod( 'main_headline_text', 'Main Headline');
$sub_headline = get_theme_mod( 'sub_headline_text', 'Subheadline Text Goes Here');
$cta1_label = get_theme_mod( 'cta_1_text');
$cta1_link = get_theme_mod( 'cta_1_link');
$cta2_label = get_theme_mod( 'cta_2_text');
$cta2_link = get_theme_mod( 'cta_2_link');
$banner_image = esc_url( get_theme_mod( 'viame_banner_image' ) );
// Alert Vars
$alert_headline = get_theme_mod( 'alert_headline');
$alert_text = get_theme_mod( 'alert_text');
$alert_cta_text = get_theme_mod( 'alert_cta_text');
$alert_cta_link = get_theme_mod( 'alert_cta_link');
?>

<div class="hero content">
  <div class="container">
    <div class="hero-text">
      <?php
        if($main_headline) {
          echo '<h1>' . $main_headline . '</h1>';
        }

        if($sub_headline) {
          echo '<h3>' . $sub_headline . '</h3>';
        }
      ?>
      <?php if ( $cta1_label || $cta1_link || $cta2_label || $cta2_link ) : ?>
        <div class="buttons">
          <?php if( $cta1_label && $cta1_link ) : ?>
            <a href="<?php echo $cta1_link; ?>" class="cta1 button is-medium"><?php echo $cta1_label; ?></a>
          <?php endif; ?>
          <?php if( $cta2_label && $cta2_link ) : ?>
            <a href="<?php echo $cta2_link; ?>" class="cta2 button is-medium"><?php echo $cta2_label; ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php if( $banner_image ) : ?>

      <img src="<?php echo $banner_image; ?>" alt="" class="hero-image">

  <?php endif; ?>
</div>

<?php if( $alert_headline || $alert_text || $alert_cta_text || $alert_cta_link ) : ?>
<div class="hero-alert content has-text-centered">
  <div class="container">
    <?php if( $alert_headline ) : ?>
      <h3 class="alert-heading"><?php echo $alert_headline; ?></h3>
    <?php endif; ?>
    <?php if( $alert_text ) : ?>
      <span class="alert-text">
        <?php echo $alert_text; ?>
      </span>
    <?php endif; ?>
    <?php if( $alert_cta_text && $alert_cta_link ) : ?>
      <a href="<?php echo $alert_cta_link; ?>" class="alert-link">
        <?php echo $alert_cta_text; ?>
      </a>
    <?php endif; ?>
  </div>
</div>
<?php endif; ?>
