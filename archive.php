<?php
/**
 * Archive template
 *
 * @package WebJfix Starter Theme
 */
get_header(); ?>

<main class="content-area">
  <div class="container site-main">
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description( '<p>', '</p>' ); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class( 'post' ); ?>>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>

      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <p><?php _e( 'No posts found in this archive.', 'webjfix' ); ?></p>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>

