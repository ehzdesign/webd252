<?php
  /*
  Plugin Name: emojimate
  Description: Example of a plugin that creates a shortcode
  Version: 1.0

  */

 function shortcode_emojimate_styles_dep(){
  wp_enqueue_style('emoji css', 'https://afeld.github.io/emoji-css/emoji.css');
  wp_enqueue_style('animate css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css');
 }

add_action( 'wp_enqueue_scripts', 'shortcode_emojimate_styles_dep' );



  // function shortcode_emojimate($default, $atts){
  //   $a = shortcode_atts( array(
  //       'emoji' => 'smile',
  //       'duration' => 'infinite',
  //       'animation' => 'jello'
  //     ), $atts);

  //   return '<i class="em em-fire"></i>';

  // }

  function shortcode_emojimate(){


    return '<i class="em em-fire"></i>';

  }

   add_shortcode('emoji', 'shortcode_emojimate');


 ?>