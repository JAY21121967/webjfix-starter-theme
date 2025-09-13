<?php
/**
 * The header for WebJfix Starter Theme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-header-inner container">
    <div class="site-branding">
      <?php
      if ( has_custom_logo() ) {
        the_custom_logo();
      } else {
        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-title">' . get_bloginfo( 'name' ) . '</a>';
      }
      ?>
    </div>

    <nav class="primary-nav" role="navigation">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
        'container'      => false,
      ) );
      ?>
    </nav>

    <div class="header-search">
      <?php get_search_form(); ?>
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">☰</button>
    </div>
  </div>
</header>
