<?php
/**
 * Theme Functions.
 *
 * @package Aquila
 */

//  echo "<pre>";
//  print_r(get_stylesheet_uri());
//  print_r(get_template_directory_uri());
//  print_r(filemtime(get_template_directory(). '/style.css'));
//  wp_die('DIEDIEDIE');

 function aquila_enqueue_scripts(){

    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'), 'all');
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory(). '/assets/main.js'), true);
    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');

    // we can also do this as well
    // wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/style.css'), 'all');
    // wp_enqueue_style( 'main-css', get_stylesheet_uri().'/main.css', ['stylesheet']);
    // wp_enqueue_style( 'stylesheet', get_stylesheet_uri());

    // wp_enqueue_script('main-js', get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory(). '/assets/main.js'), true);

 }
add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' )
?>