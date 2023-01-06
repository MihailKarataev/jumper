<?php
    
    //ПОДКЛЮЧАЮ СТИЛИ
    add_action( 'wp_enqueue_scripts', 'wp_enqueue_main_style');
    function wp_enqueue_main_style() {
        wp_enqueue_style( 'main_style', get_stylesheet_uri());
    }
    
    add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
    function my_scripts_method(){
        wp_enqueue_script( 'interview-script', get_template_directory_uri() . '/js/main.js');
        wp_enqueue_script( 'diagram-script', get_template_directory_uri() . '/js/diagram.js');
    }
    


?>