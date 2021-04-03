<?php

function intermediate_script(){
  wp_enqueue_style( 'font', '//fonts.googleapis.com/css?family=Noto+Serif|Noto+Serif+JP&display=swap', array() );
  wp_enqueue_style( 'font', '//ffonts.gstatic.com', array() );
  wp_enqueue_style( 'style', get_template_directory_uri(). '/scss/style.css', array(), '1.0.0' );
  wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css', array(), '1.0.0' );
  wp_enqueue_script( 'bgswitcher', get_stylesheet_directory_uri(). '/js/jquery.bgswitcher.js', array() );
  wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery-3.5.1.min.js', array(), '3.5.1' );
  wp_enqueue_script( 'script', get_template_directory_uri(). '/js/script.js', array('jquery'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'intermediate_script' );