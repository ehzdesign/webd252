<header class=" nav-down header--fullpage">
    <a class="logo" href=" <?php echo get_site_url(); ?> ">WEBD252 - CMS</a>
  <nav class="nav--header">
     <?php    /**
        * Displays a navigation menu
        * @param array $args Arguments
        */
        $args = array(
          'theme_location' => 'header-menu',
          // 'menu' => '',
          'container' => 'div',
          'container_class' => 'header-menu-container',
          // 'container_id' => '',
          'menu_class' => 'header-nav-links',
          // 'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          // 'before' => '',
          // 'after' => '',
          // 'link_before' => '',
          // 'link_after' => '',
          'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
          'depth' => 0,
          // 'walker' => ''
        );

        wp_nav_menu( $args ); ?>
    <div class="search-form">
      <!-- insert search form into nav -->
      <?php get_search_form(); ?>
    </div>
  </nav>
</header>


