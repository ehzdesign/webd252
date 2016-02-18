<?php

  add_filter( 'the_content' , 'twitter_add_link');


  function twitter_add_link( $content ) {

    //include our CSS
    wp_enqueue_style('twitter_example', plugins_url('css/style.css', __FILE__ ) );

    //add tweet link

    $content .=
     '<a class="twitter-link" href="https://twitter.com/intent/tweet?' .



  }



 ?>