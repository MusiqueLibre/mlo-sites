<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SemPress
 * @since SemPress 1.0.0
 */
?>
  <aside id="main_sidecol" class="make_cell col_side">
      <header id="sidebar_header">
          <?php get_search_form(); ?>
      </header>
      <?php do_action( 'before_sidebar' ); ?>
      <nav>
        <ul id="side_nav">
          <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

            <li class="bullet_less side_filter" id="archives" class="widget">
              <h1 class="sidebar_title"><?php _e( 'Archives', 'sempress' ); ?></h1>
              <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
              </ul>
            </li class="bullet_less side_filter">

            <li class="bullet_less side_filter" id="meta" class="widget">
              <h1 class="sidebar_title"><?php _e( 'Meta', 'sempress' ); ?></h1>
              <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
              </ul>
            </li class="bullet_less side_filter">

          <?php endif; // end sidebar widget area ?>
      </ul>
    </nav>

    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
    <?php endif; ?>
  </aside>
