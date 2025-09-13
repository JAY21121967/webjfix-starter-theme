<?php
/**
 * 404 Page Template
 *
 * @package WebJfix Starter Theme
 */
get_header(); ?>

<main class="content-area">
  <div class="container site-main">
    <h1><?php _e( 'Oops! Page not found.', 'webjfix' ); ?></h1>
    <p><?php _e( 'It looks like nothing was found here. Try searching instead.', 'webjfix' ); ?></p>

    <?php get_search_form(); ?>

    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn">
      <?php _e( 'Back to Home', 'webjfix' ); ?>
    </a></p>
  </div>
</main>

<?php get_footer(); ?>
