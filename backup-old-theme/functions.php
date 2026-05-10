<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'first');
   wp_register_style('second', get_template_directory_uri() . '/assets/css/main.css', false,'1.1','all');
   wp_enqueue_style( 'second');
   wp_register_style('third', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
   wp_enqueue_style( 'third');
   wp_register_style('fourth', get_template_directory_uri() . '/assets/css/slicknav.css', false,'1.1','all');
   wp_enqueue_style( 'fourth');
   wp_register_style('fifth', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', false,'1.1','all');
   wp_enqueue_style( 'fifth');
   wp_register_style('sixth', get_template_directory_uri() . '/assets/css/animate.css', false,'1.1','all');
   wp_enqueue_style( 'sixth');
   wp_register_style('seventh', get_template_directory_uri() . '/assets/css/owl.carousel.css', false,'1.1','all');
   wp_enqueue_style( 'seventh');
   wp_register_style('eight', get_template_directory_uri() . '/assets/css/default.css', false,'1.1','all');
   wp_enqueue_style( 'eight');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrap');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'jquery');
    wp_register_script('countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'countdown');
    wp_register_script('scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'scroll');
    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'wow');
    wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'carousel');
    wp_register_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'slicknav');
    wp_register_script('nivo', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'nivo');
    wp_register_script('validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'validator');
    wp_register_script('contact', get_template_directory_uri() . '/assets/js/contact-form-script.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'contact');
    wp_register_script('map', get_template_directory_uri() . '/assets/js/jquery.mapit.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'map');
    wp_register_script('initializer', get_template_directory_uri() . '/assets/js/initializers.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'initializer');
    wp_register_script('js-script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'js-script');

}
add_action('wp_enqueue_scripts', 'add_script');
add_theme_support( 'menus' );

