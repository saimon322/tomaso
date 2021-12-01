<?php

if ( ! defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if ( ! function_exists('theme_setup')) :
    function theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        
        register_nav_menus(
            array(
                'header-menu'   => esc_html__('Header', 'theme'),
                'footer-menu'   => esc_html__('Footer', 'theme'),
                'language-menu' => esc_html__('language', 'theme'),
            )
        );
        
        add_theme_support(
            'html5',
            array(
                'gallery',
                'style',
                'script',
            )
        );
        
    }
endif;
add_action('after_setup_theme', 'theme_setup');


function enqueue_theme_style_scripts()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/dist/css/style.css', array(), _S_VERSION);
    wp_enqueue_style('theme_styles', get_template_directory_uri() . '/style.css', array(), _S_VERSION);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets//dist/js/app.bundle.js', array(), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_style_scripts');

require get_template_directory() . '/app/Autoloader.php';

if (function_exists('pll_register_string')) :
    $footer_settings = get_field('footer_settings', 'option');
    pll_register_string( 'footer_address', $footer_settings['address'], 'footer_settings' );
endif;