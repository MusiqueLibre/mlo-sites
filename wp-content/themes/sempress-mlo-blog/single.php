<?php
/**
 * The Template for displaying all single posts.
 *
 * @package SemPress
 * @since SemPress 1.0.0
 */

get_header(); ?>

      <main id="main_content" class="make_cell col_main">

      <?php while ( have_posts() ) : the_post(); ?>


        <?php get_template_part( 'content', get_post_format() ); ?>

        <?php sempress_content_nav( 'nav_below' ); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
            comments_template( '', true );
        ?>

      <?php endwhile; // end of the loop. ?>

      </main><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
