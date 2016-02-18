<?php
/*
Plugin Name: Example Filter Plugin
Description: an example of a plugin that uses filter hooks
Plugin URI: http://#
Author: Author
Author URI: http://#
Version: 1.0
License: GPL2
Text Domain: Text Domain
Domain Path: Domain Path
*/



  add_filter('the_content', 'filter_example_content');

  function filter_example_content($content) {

    //convert content to uppercase
    $content = strtoupper($content);

    // return modified content
    return $content;

  };


 ?>