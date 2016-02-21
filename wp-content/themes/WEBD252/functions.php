<?php

  //add featured image support to posts
add_theme_support( 'post-thumbnails' );

function webd252_theme_styles() {


  wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
  wp_enqueue_style( 'google_font', 'https://fonts.googleapis.com/css?family=Montserrat|Hind');
  wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');


}

function webd252_theme_scripts() {
    wp_register_script( 'headerScroll', get_stylesheet_directory_uri() . '/js/headerScroll.js', array('jquery'),'', true);
    wp_enqueue_script( 'headerScroll' );
}

add_action( 'wp_enqueue_scripts', 'webd252_theme_styles'); //add stylesheets to head
add_action( 'wp_enqueue_scripts', 'webd252_theme_scripts'); //add scripts to footer

    // Register Sidebars
function custom_sidebar() {

  $args = array(
    'id'            => 'main-sidebar',
    'class'         => 'c-main-sidebar',
    'name'          => __( 'Main Widget Area', 'text_domain' ),
    'description'   => __( 'Appears on posts and pages in the sidebar.', 'text_domain' ),
    'before_title'  => '<strong class="widget__title">',
    'after_title'   => '</strong>',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>'
    );
  register_sidebar( $args );

}

add_action( 'widgets_init', 'custom_sidebar' );


//modify font-sizes for tag cloud widget
function set_tag_cloud_sizes($args) {
  $args['smallest'] = 0.9;
  $args['largest'] = 0.9;
  $args['unit'] = em;
  return $args;
}

add_filter('widget_tag_cloud_args','set_tag_cloud_sizes');




  // register_nav_menu('drawer-menu',__( 'Drawer Menu' ));
  register_nav_menu('drawer-menu', 'Drawer Menu' );
  register_nav_menu('header-menu', 'Header Menu' );




 ?>