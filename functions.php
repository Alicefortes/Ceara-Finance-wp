<?php

require_once(get_template_directory().'/inc/class-nav-bootstrap-walker.php');

function my_theme_setup(){

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => 'Primary'
        )
    );
}
add_action('after_setup_theme','my_theme_setup');


function css_files() {
    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css');
    
    if ( is_front_page() == true ) {
        // só vai carregar se estiver na front-page
        wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/styles/home.css');
    }
}
add_action('wp_enqueue_scripts', 'css_files');


function script_files(){

    wp_enqueue_script('jquery'); 

    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array('popper'));
}
add_action('wp_enqueue_scripts', 'script_files');

?>
