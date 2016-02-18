  <?php get_header(); ?>


  <div class="l-page-wrapper">

    <?php get_template_part( 'full-width', 'nav' ); ?>



    <?php if ( has_post_thumbnail() ) : ?>

      <?php


    //get url for featured image
      $banner_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
      $banner_url = $banner_image['0'];
      ?>

      <div class="c-banner-image" style="background-image: url(<?php echo $banner_url; ?>)">

        <div class="o-overlay o-overlay--single"></div>

      <?php else:

      $result = get_the_category();

      $post_category = $result[0]->category_nicename;

      ?>

      <div class="c-banner-image" style="background-image: url(<?php echo get_template_directory_uri() . '/images/category/'. $post_category .'.jpeg'; ?>)">



        <div class="o-overlay o-overlay--single"></div>




      <?php endif; ?>


    </div>

    <main class="main-content main-content--single">

      <section class="l-main-content__wrapper l-main-content__wrapper--single">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

         <div class="post">

          <h1 class="u-capitalize  u-heading--large"><?php the_title(); ?></h1>

          <?php get_template_part('post', 'meta') ?>

          <p class="content"><?php the_content(); ?></p>

          <!-- display custom post due date and overall mark for assignments -->
          <?php get_template_part( 'assignment', 'attrs' ); ?>

          <div class="next-post-container">
          <?php previous_post_link('<div class="next-post-link--large"><span class="post-direction">< prev post</span>%link</div>'); ?>

           <?php next_post_link('<div class="next-post-link--large"><span class="post-direction">next post ></span>%link</div>'); ?>

         </div>


         <div class="comment list">
          <?php wp_list_comments( array( 'style' => 'div' ) ); ?>
        </div>

      </div>

    <?php endwhile;?>
  <?php endif;?>
</section>
<?php get_sidebar(); ?>

</main>
</div>

<?php get_footer(); ?>