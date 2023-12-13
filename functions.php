<?php
/**
 * Theme functions and definitions.
 * 
 * 
 */
function custom_scripts() {
    //1. How to enqueue style or script
    wp_enqueue_style('custom-style', get_stylesheet_uri(), array(), time(), 'all');
    wp_enqueue_script('custom-js', get_template_directory_uri(). '/build/js/custom.min.js', array('jquery'), time(), true)

    //2. How to enqueue file on specific page template
    if(is_page_template(array('a.php', 'b.php', 'c.php')|| is_front_page())){
        wp_enqueue_style('wcd-swiper.css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css');

        wp_enqueue_script('wcd-swiper.js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js', array('jquery'), true);
    
        wp_enqueue_script('wcd-gallery', get_template_directory_uri() . '/build/js/gallery.min.js', array('jquery'), false, true);
    }

    //3.This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'primary' => esc_html('Primary Menu'),
        'header-button' => esc_html('Header Button'),
        'footer-menu' => esc_html('Footer Menu'),
        'mobile-menu' => esc_html('Mobile Menu'),
        'privacy-menu' => esc_html('Privacy Policy'),
      ));
  
}

/**
 * Add ACF options
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
  }