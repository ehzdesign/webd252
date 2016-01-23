<?php get_header(); ?>

<div class="l-page-wrapper l-clearfix">

  <section class="l-intro-section--homepage">

    <div class="l-intro-content">
      <h1 class="site-title">

        <?php bloginfo('name'); //get site title ?>

      </h1>
      <p class="tagline">

        <?php bloginfo('description') // get site tagline ?>

      </p>
      <div class="l-instructor-container">

        <div class="l-instructor-name-social-container">

          <div class="instructor__name">Instructor: Chris Maissan</div>

          <div class="instructor__social">

            <ul>

              <li class="instructor__social__item">

                <a href="https://twitter.com/chrismaissan" target="_blank">

                  <i class="fa fa-twitter"></i>

                </a>

              </li>

              <li class="instructor__social__item">

                <a href="mailto:chris@maissan.com?Subject=WEBD252%20Student%20Question" target="_top">

                  <i class="fa fa-envelope"></i>

                </a>

              </li>

            </ul>

          </div>

        </div>

        <div class="instructor__image"></div>

      </div>

    </div>

    <div class="l-video-container--homepage">

      <div class="o-video-overlay"></div>

      <video autoplay loop class="c-video--homepage u-flipY">

        <source src="<?php echo get_template_directory_uri() . '/video/Goat/MP4/Go-Goat.mp4'; ?>" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.

          <source src="<?php echo get_template_directory_uri() . '/video/Goat/WEBM/Go-Goat.webm'; ?>" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.

      </video>

     </div>

  </section>

  <main class="main-content main-content--home">

    <div class="l-main-content__wrapper">

          <?php

          $args = array(

              //Category Parameters
            'category_name'    => 'Assignments',


              //Type & Status Parameters
            'post_type'   => 'post',

            'post_status' => array(
              'publish'
              ),


              //Order & Orderby Parameters
            'order'               => 'DESC',
            'orderby'             => 'date',



              //Pagination Parameters
            'nopaging'               => false,
            'posts_per_page'         => 5
              // 'paged'                  => get_query_var('paged'),

            );



          $query = new WP_Query( $args );

          ?>


          <?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>


            <?php
              //reduce post length to 60 words when appearing on home-page
            $read_more = '<small><a href="' . get_the_permalink() . '" class="read-more-link--small">Read more...</a></small>';

            $trimmed_content = wp_trim_words( get_the_content(), 40, ' ...' );

            ?>




            <div class="c-post .l-clearfix">

             <div class="post-meta">

              <span class="post-meta__author"><?php the_author(); ?></span>

              <br>

              <span class="post-meta__date"><?php the_time('F j, Y'); ?></span>

              <span class="post-meta__time"> ~ <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>

              <br>

              <span class="comment-count"><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></span>

              <?php the_tags( '<ul class="post-meta__tags"><li class="post-meta__tags__item">', '</li><li class="post-meta__tags__item">', '</li></ul>' ); ?>

            </div>

            <a href=" <?php the_permalink(); //get link for post?> " class="l-post-link-wrapper">

             <?php if(has_post_thumbnail()) : //get featured image for post?>

              <div class="c-featured-image--home">

                <?php the_post_thumbnail( 'large', $attr ); //get large size of featured image?>

              </div>

              <?php endif; ?>

            <h2 class="c-post__title">

              <?php the_title(); ?>

            </h2>


            <p class="content"><?php echo $trimmed_content; ?></p>

          </a>


          <?php echo $read_more ?>



          <?php
          $due_date = get_post_meta( get_the_ID(), 'Due Date', true );
                  // Check if the custom field has a value.
          if ( ! empty( $due_date ) ):  ?>

          <br>
          <div class="l-custom-meta-container">
            <span class="due-date meta-pill">

             Due date: <?php echo $due_date; ?>

           </span>

         <?php endif; ?>

         <?php
         $overall_mark = get_post_meta( get_the_ID(), 'Overall Mark', true );
                  // Check if the custom field has a value.
         if ( ! empty( $overall_mark ) ):  ?>


         <span class="overall-mark meta-pill">

           Overall Mark: <?php echo $overall_mark; ?>

         </span>

       </div>

      <?php endif; ?>

          <?php edit_post_link('edit post','<small>', '</small>'); ?>

    </div>




    <?php endwhile;?>
    <?php endif;?>
  </div>



  <?php wp_reset_postdata(); ?>

</main>


</div>

<?php get_footer(); ?>
