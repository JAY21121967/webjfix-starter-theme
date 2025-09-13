<?php
/**
 * Front Page Template
 *
 * Displays hero + latest posts
 */
get_header(); ?>

<main>
  <section class="hero">
    <h1>Build a Website That Works as Hard as You Do</h1>
    <p>We design modern, responsive, SEO-friendly WordPress sites.</p>
    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn">Get a Free Consultation</a>
  </section>

  <section class="content-area">
    <div class="container site-main">
      <h2><?php _e( 'Latest Blog Posts', 'webjfix' ); ?></h2>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'post' ); ?>>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          </article>
        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
      <?php else : ?>
        <p><?php _e( 'No posts found.', 'webjfix' ); ?></p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
