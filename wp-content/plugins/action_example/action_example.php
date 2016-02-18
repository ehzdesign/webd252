<?php

  /*
  Plugin Name: Example Action Plugin
  Description: Example of a plugin that uses action hooks
  Version: 1.0
  Author: Erick Hernandez
  */

 add_action('wp_head', 'action_example_head');

 function action_example_head () {
  echo "<style>

  *{
    font-family: 'Comic Sans' !important;
  }

 </style>";

 };


?>