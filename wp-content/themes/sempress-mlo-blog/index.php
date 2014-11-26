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

<div id="full_content_container">
  <main id="main_content" class="make_cell col_main">
  <h1 id="main_content_title">Derniers articles du blog</h1>

  <?php 
  if(get_option("hp_layout") == "category"){
    //foreach( wp_list_categories( array('title_li' => false) );
    echo '<ul id="home_category">';
    foreach( get_categories() as $index => $category){
      echo '<li class="home_category_list bullet_less index_list_columns two_columns">';
      echo '<img class="home_category_img" src="'.z_taxonomy_image_url($category->term_id, 'thumbnail').'" />';
      echo '<h2 class=" home_category_title home_title"><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></h2>';
      echo '<p class="home_category_descr">'.$category->description.'</p>';
      echo '<ul class="home_category_article">';
      echo '<details>';
      echo '<summary>'.__('Display articles', 'mlo').'</summary>';
      foreach( get_posts(array('category' => $index)) as $post){
        setup_postdata( $post );
      ?>
        <li id="home_category_article_list"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php
      }
      echo '</details></ul></li>';
    }
    echo '</ul>';
  }else{
  ?>
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
          <h1 class="entry-title home_title p-entry-title"><?php _e( 'Nothing Found', 'sempress' ); ?></h1>
        </header><!-- .entry-header -->

        <div class="entry-content e-entry-content">
          <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sempress' ); ?></p>
          <?php get_search_form(); ?>
        </div><!-- .entry-content -->
      </article><!-- #post-0 -->

    <?php endif; ?>
  </div>

  <?php sempress_content_nav( 'nav_below' ); ?>

  <?php 
    } //closing the else
  ?>
  </main><!-- #content -->
  <?php
    get_sidebar();
    get_footer(); 
  ?>
</div>
