<?php

require_once(get_template_directory().'/inc/class-nav-bootstrap-walker.php');
require_once(get_template_directory().'/inc/membros.php');
require_once(get_template_directory().'/inc/parceiros.php');

function my_theme_setup(){

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => 'Primary',
            'languages' => 'Languages',
            'categories' => 'Categories'
        )
    );
}
add_action('after_setup_theme','my_theme_setup');


function css_files() {
    
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/inc/owl/owl.carousel.css' );
    
    if ( is_front_page() == true ) {
        // só vai carregar se estiver na front-page
        wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/home.css');
    }

    if ( is_page('projetos') == true ) {
        // só vai carregar se estiver na pag projetos
        wp_enqueue_style('projetos', get_template_directory_uri() . '/assets/css/projetos.css');
    }

    if ( is_page('equipe') == true ) {
        // só vai carregar se estiver na pag equipe
        wp_enqueue_style('equipe', get_template_directory_uri() . '/assets/css/equipe.css');
    }

    if ( is_category() == true ) {
        // só vai carregar se estiver em uma das categorias do blog
        wp_enqueue_style('categoria', get_template_directory_uri() . '/assets/css/categoria.css');
        
        //funcao para limitar excerpt no blog
        function wpdocs_custom_excerpt_length( $length ) {
            return 35;
        }
        add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

        //funcao para substituir o p por h6 no excerpt
        function replace_tag($string){
            $replace = array(
                '<p>' => '<h6>',
                '</p>' => '</h6>'
            );
            $string = str_replace(array_keys($replace), $replace, $string);
            return $string;
        }
        add_filter('the_excerpt', 'replace_tag');
    }

    if ( is_single() == true ) {
        // só vai carregar se estiver em um dos posts (single)
        wp_enqueue_style('posts', get_template_directory_uri() . '/assets/css/single.css');
    }
    
}
add_action('wp_enqueue_scripts', 'css_files');

function script_files(){

    wp_enqueue_script('jquery'); 
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));
    if ( is_page('equipe') == true ) {
        wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/inc/owl/owl.carousel.min.js');
        wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/inc/owl/owl.carousel.min.js');
        wp_enqueue_script( 'owl-carousel-init-js', get_template_directory_uri() . '/inc/owl/owl.carouselinit.js');
    }
    if ( is_front_page() == true ) {
        wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/inc/owl/owl.carousel.min.js');
        wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/inc/owl/owl.carousel.min.js');
        wp_enqueue_script( 'owl-carousel-init-js', get_template_directory_uri() . '/inc/owl/owl.carouselinithome.js');
    }
}
add_action('wp_enqueue_scripts', 'script_files');

?>
