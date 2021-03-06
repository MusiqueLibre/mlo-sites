<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SemPress
 * @since SemPress 1.0.0
 */

get_header(); ?>

<div id="full_content_container">
  <main id="main_content" class="make_cell col_main" >

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>

      <?php comments_template( '', true ); ?>

    <?php endwhile; // end of the loop. ?>

  </main><!-- #content -->

  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
