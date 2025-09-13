<?php
/**
 * Main Fallback Template
 */
get_header(); ?>

<main class="content-area">
  <div class="container">
    <div class="site-main">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class('post'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?>
                </a>
              </div>
            <?php endif; ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="excerpt"><?php the_excerpt(); ?></div>
          </article>
        <?php endwhile; ?>

        <div class="pagination">
          <?php the_posts_pagination(); ?>
        </div>
      <?php else : ?>
        <p><?php _e( 'No posts found.', 'webjfix' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
