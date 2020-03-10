<?php


function add_script(){
    wp_register_script('jquery-js',get_template_directory_uri() . '/js/jquery.min.js', null,null,false);
    wp_enqueue_script('jquery-js');

    wp_register_script('migrate-js',get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', null,true);
    wp_enqueue_script('migrate-js');
    
    wp_register_script('popper',get_template_directory_uri().'/js/popper.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('popper');
    wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('bootstrap');
    wp_register_script('easing',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery-js'),null,true);
    wp_enqueue_script('easing');
    wp_register_script('waypoints',get_template_directory_uri().'/js/jquery.waypoints.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('waypoints');
    wp_register_script('stellar',get_template_directory_uri().'/js/jquery.stellar.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('stellar');
    wp_register_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('carousel');
    wp_register_script('magnific',get_template_directory_uri().'/js/jquery.magnific-popup.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('magnific');
    wp_register_script('aos',get_template_directory_uri().'/js/aos.js',array('jquery-js'),null,true);
    wp_enqueue_script('aos');
    wp_register_script('animateNumber',get_template_directory_uri().'/js/jquery.animateNumber.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('animateNumber');
    wp_register_script('datepicker',get_template_directory_uri().'/js/bootstrap-datepicker.js',array('jquery-js'),null,true);
    wp_enqueue_script('datepicker');
    wp_register_script('timepicker',get_template_directory_uri().'/js/jquery.timepicker.min.js',array('jquery-js'),null,true);
    wp_enqueue_script('timepicker');
    // wp_register_script('google',get_template_directory_uri().'/js/google-map.js',array('jquery-js'),null,true);
    // wp_enqueue_script('google');
    wp_register_script('main',get_template_directory_uri().'/js/main.js',array('jquery-js'),null,true);
    wp_enqueue_script('main');
    wp_register_script('scroll',get_template_directory_uri().'/js/scrolling.js',array('jquery-js'),null,true);
    wp_enqueue_script('scroll');
}


add_action('wp_enqueue_scripts','add_script');


?>