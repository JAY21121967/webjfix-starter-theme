<?php
/**
 * Template for displaying all pages
 *
 * @package WebJfix Starter Theme
 */

get_header(); ?>

<main class="content-area">
  <div class="site-main">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <div class="page-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile;
    else :
      echo '<p>' . __( 'Sorry, no page found.', 'webjfix' ) . '</p>';
    endif;
    ?>
  </div>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
