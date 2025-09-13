<?php
/**
 * WebJfix Starter Theme - Functions
 */

/* ---------------------------
   Theme setup
----------------------------*/
function webjfix_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'webjfix' ),
    ) );
}
add_action( 'after_setup_theme', 'webjfix_theme_setup' );

/* ---------------------------
   Enqueue styles & scripts
----------------------------*/
function webjfix_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'webjfix-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    $script_path = get_template_directory() . '/js/script.js';
    if ( file_exists( $script_path ) ) {
        wp_enqueue_script(
            'webjfix-main-js',
            get_template_directory_uri() . '/js/script.js',
            array(),
            $theme_version,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'webjfix_enqueue_assets', 20 );

/* ---------------------------
   Register sidebar
----------------------------*/
function webjfix_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'webjfix' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will appear in the sidebar.', 'webjfix' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'webjfix_widgets_init' );
