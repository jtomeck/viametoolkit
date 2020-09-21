<?php
/**
 * Template part for displaying VIAME in Action Slider
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */

?>

<?php
$group = get_field('viame_deep_dive');
if( $group ): ?>

  <?php // Vars
    $title = $group['viame_deep_dive_title'];
    $blurb = $group['viame_deep_dive_blurb'];
  ?>

  <article class="home-deep-dive section">
    <header class="content has-text-centered">
      <h2><?php echo $title; ?></h2>
      <?php echo $blurb; ?>
    </header>
    <div class="accordion">
      <div class="acc-panels">
        <?php // History
        $history = $group['viame_deep_dive_history'];
        if( $history ): ?>
          <div class="acc-panel">
            <input type="checkbox" id="chck1">
            <label class="acc-panel-label" for="chck1">
              <?php echo $history['viame_deep_dive_history_title']; ?>
            </label>
            <div class="acc-panel-content content">
              <?php echo $history['viame_deep_dive_history_text']; ?>
            </div>
          </div>
        <?php endif; ?>

        <?php // Events
        $events = $group['viame_deep_dive_events'];
        if( $events ): ?>
          <div class="acc-panel">
            <input type="checkbox" id="chck2">
            <label class="acc-panel-label" for="chck2">
              <?php echo $events['viame_deep_dive_events_title']; ?>
            </label>
            <div class="acc-panel-content content">
              <?php // Vars
              $lists = $events['viame_deep_dive_events_list'];
              foreach( $lists as $list ) : ?>
                <?php // Vars
                  $link = $list['viame_deep_dive_event_list_link'];
                ?>
                <div class="viame-event columns is-mobile">
                  <div class="column">
                    <span class="iconify" data-icon="mdi-calendar"></span>
                  </div>
                  <div class="column is-three-quarters-desktop is-half-mobile viame-event-title">
                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                      <?php echo $link['title']; ?>
                    </a>
                  </div>
                  <div class="date-time column is-one-third">
                    <span class="date-label">Date:</span> <?php echo $list['viame_deep_dive_event_list_date']; ?>
                    <span class="time-label">Time:</span> <?php echo $list['viame_deep_dive_event_list_time']; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </article>

<?php endif; ?>
