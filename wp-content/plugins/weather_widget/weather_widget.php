<?php

/*
  Plugin name: Example Widget Plugin
  Description: Example of a plugin that creates a widget
  Version: 1.0
  Author: Chris Maissan
*/

  add_action ( 'widgets_init', 'weather_widget_register' );

  function weather_widget_register() {
    register_widget('weather_widget' );
  }

  class weather_widget extends WP_Widget {

    //stuff that happens when the widget is initialized
    //
    function __construct() {
      parent::WP_Widget( 'weather_widget', 'Current Weather', array(
        'description' => 'Show the current weather conditions.'
        ) );
    }

    /**
     * Dsiplay Widget
     */

    function widget( $args, $instance ) {
      echo "It's" . $instance['expletive'] . "cold.";
    }

    /**
     * Widget option form
     */

    function form( $instance ) {

      //Load Settings

       if ( $instance ) {

          $expletive = $instance['expletive'];

       } else {
        // Or use defaults
          $expletive = 'Default';

       }


      echo '<p>Expletive: <input name="'.
      $this->get_field_name('expletive') .
      '" type="text" value="'. $expletive .'"></p>';
    }



  }

 ?>