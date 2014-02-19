<?php
/**
 * @package SemPress
 * @since SemPress 1.0.0
 */
?>

<article <?php sempress_post_id(); ?> <?php post_class(); ?><?php sempress_blog_itemprop("blogPost"); ?> itemscope itemtype="http://schema.org/BlogPosting">
  <header class="entry-header">
    <h1 class="entry-title p-name" itemprop="name" id="main_content_title"><?php the_title(); ?></h1>
    <?php if ( 'post' == get_post_type() ) : ?>
    <div id="article_header_meta" class="entry-meta">
      <?php sempress_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->
  <div class="content">

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary p-summary" itemprop="description">
      <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content e-content" itemprop="description articleBody">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'sempress' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'sempress' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>
    <?php get_template_part( 'entry', 'footer' ); ?>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->
