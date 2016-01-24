  <?php get_header(); ?>


  <div class="l-page-wrapper">

   <main class="main-content main-content--single">

   <?php
    //get url for featured image
     $banner_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
     $banner_url = $banner_image['0'];
   ?>

    <div class="c-banner-image" style="background-image: url(<?php echo $banner_url; ?>)"><div class="o-video-overlay"></div></div>


    <section class="l-main-content__wrapper">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <div class="post">

        <h1><?php the_title(); ?></h1>

         <p class="content"><?php the_content(); ?></p>


      <?php endwhile;?>
    <?php endif;?>
   </section>
    <?php previous_post_link(); ?>

    <?php next_post_link(); ?>
    </main>
    <aside></aside>
    </div>

   <?php get_footer(); ?>