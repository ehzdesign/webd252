  <?php get_header(); //display page header?>


  <div class="l-page-wrapper">


    <?php get_template_part( 'full-width', 'nav' ); //insert header with nav and search bar?>




    <main class="main-content main-content--single offset-header">

      <section class="l-main-content__wrapper l-main-content__wrapper--single l-main-content__wrapper--archive">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



          <?php if ( has_post_thumbnail() ) : ?>

            <?php


            //get url for featured image to set as hero image
            $archive_bg_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
            $archive_bg_image_url = $archive_bg_image['0'];

            ?>



            <div onclick="window.location = ' <?php the_permalink(); ?> '" class="post post--archive" style="background-image: url(<?php echo $archive_bg_image_url; ?>)">



            <?php else:

            //if no featured image is found display the image with matching filename from inages folder

            $result = get_the_category();

            $post_category = $result[0]->category_nicename;

            ?>



            <div onclick="window.location = ' <?php the_permalink(); ?> '" class="post post--archive " style="background-image: url(<?php echo get_template_directory_uri() . '/images/category/'. $post_category .'.jpeg'; ?>)">




            <?php endif; ?>



            <h1 class="u-capitalize  u-heading--large u-text-overlay"><?php the_title(); ?></h1>

            <?php get_template_part('post', 'meta') ?>



            <?php get_template_part( 'assignment', 'attrs' ); ?>


            <div class="o-overlay o-overlay--single"></div>
          </a>
        </div>

      <?php endwhile;?>
    <?php endif;?>
  </section>
  <?php get_sidebar(); //display siebar?>

</main>
</div>

<?php get_footer(); //display footer?>