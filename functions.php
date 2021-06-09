<?php


function load_stylesheets(){

    wp_register_style('style', get_template_directory_uri().'/style/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri().'/style/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('allmin', get_template_directory_uri().'/style/all.min.css', array(), 1, 'all');
    wp_enqueue_style('allmin');

    wp_register_style('gdpr', get_template_directory_uri().'/style/gdpr.css', array(), 1, 'all');
    wp_enqueue_style('gdpr');

    wp_register_style('cookie', get_template_directory_uri().'/style/cookie.css', array(), 1, 'all');
    wp_enqueue_style('cookie');

    wp_register_style('custom', get_template_directory_uri().'/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// LOAD SCRIPTS

function addjs(){

    wp_register_script('jquery', get_template_directory_uri() .'/js/jquery-3.5.1.min.js' , array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('index', get_template_directory_uri() .'/js/index.js' , array(), 1, 1, 1);
    wp_enqueue_script('index');

    wp_register_script('custom', get_template_directory_uri() .'/custom.js' , array(), 1, 1, 1);
    wp_enqueue_script('custom');

}

add_action( 'wp_enqueue_scripts', 'addjs' );



//

add_theme_support('menus');