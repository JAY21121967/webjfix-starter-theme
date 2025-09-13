<?php
/**
 * The template for displaying single posts
 */

get_header();
?>

<main class="content-area">
  <div class="container">
    <div class="site-main">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class('single-post'); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="post-meta">
              <span class="post-date"><?php echo get_the_date(); ?></span>
              <span class="post-author"><?php the_author(); ?></span>
            </div>

            <?php if ( has_post_thumbnail() ) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>

            <div class="entry-content">
              <?php the_content(); ?>
            </div>
          </article>

          <?php comments_template(); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php _e( 'Sorry, no posts found.', 'webjfix' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>




