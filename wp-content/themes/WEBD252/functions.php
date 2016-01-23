<?php
    //add featured image to posts
    add_theme_support( 'post-thumbnails' );

    function webd252_theme_styles() {


      wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
      wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css?family=Montserrat|Hind');
      wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css');
      // wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');


    }

    add_action( 'wp_enqueue_scripts', 'webd252_theme_styles' );


 ?>