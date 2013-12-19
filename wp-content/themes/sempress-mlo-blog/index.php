<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SemPress
 * @since SemPress 1.0.0
 */

get_header(); ?>

<main id="main_content">
<h1 id="main_content_title">Derniers articles du blog</h1>

<div id="masonry_container">
  <?php if ( have_posts() ) : ?>


    <?php /* Start the Loop. The XOR is a little trick to prevent endless loops
             when there's too few articles */ ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to overload this in a child theme then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', 'home' );
        $index++;
      ?>

    <?php endwhile; ?>


  <?php else : ?>

    <article id="post-0" class="post no-results not-found">
      <header class="entry-header">
        <h1 class="entry-title p-entry-title"><?php _e( 'Nothing Found', 'sempress' ); ?></h1>
      </header><!-- .entry-header -->

      <div class="entry-content e-entry-content">
        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sempress' ); ?></p>
        <?php get_search_form(); ?>
      </div><!-- .entry-content -->
    </article><!-- #post-0 -->

  <?php endif; ?>
</div>

<?php sempress_content_nav( 'nav_below' ); ?>
</main><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
