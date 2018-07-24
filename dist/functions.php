<?php

function sg_connect_styles()
{
    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css?68', array(), '1', 'all' );
    wp_register_style( 'slick', get_template_directory_uri() . '/other/slick/slick.css', array(), '1', 'all' );
    wp_register_style( 'slick-theme', get_template_directory_uri() . '/other/slick/slick-theme.css?1', array(), '1', 'all' );
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'slick' );
    wp_enqueue_style( 'slick-theme' );
}
add_action( 'wp_enqueue_scripts', 'sg_connect_styles' );

function sg_connect_scripts()
{
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '2', true );
    wp_register_script( 'slick', get_template_directory_uri() . '/other/slick/slick.min.js', array(), '2', true );
    wp_register_script( 'myslick', get_template_directory_uri() . '/js/myslick.js', array(), '2', true );
    wp_register_script( 'burger', get_template_directory_uri() . '/js/burger.js', array(), '2', true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick' );
    wp_enqueue_script( 'myslick' );
    wp_enqueue_script( 'burger' );
}
add_action( 'wp_enqueue_scripts', 'sg_connect_scripts', 5);

register_nav_menus( array(
    'header_menu_top' => 'My Custom Header Menu Top',
    'header_menu_bottom' => 'My Custom Header Menu Bottom',
    'footer_menu' => 'My Custom Footer Menu',
) );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_theme_support( 'post-thumbnails' );

// Add the filter to manage the p tags
add_filter( 'the_excerpt', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $excerpt )
{
    global $post;

    // Check for single page and image post type and remove
    if ( is_home() && $post->post_type == 'post' )
        remove_filter('the_excerpt', 'wpautop');

    return $excerpt;
}

function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = substr($excerpt, 0, 400);
    return $excerpt;
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

    acf_add_options_sub_page('Header');

    acf_add_options_sub_page('Footer');

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Options',
        'menu_title'	=> 'Theme Options',
        'menu_slug' 	=> 'theme-general-options',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}