  <?php get_header(); ?>
  
  <h1><?php bloginfo('name'); ?></h1>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
    <div class="post">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <p class="content"><?php the_content(); ?></p>
    <div class="meta">
      
      <?php the_author(); ?>
      
      <?php the_date(); ?>
      
      <?php the_time(); ?>
      
    </div>
    </div>
   
   <?php endwhile;?>
   <?php endif;?>

   <?php previous_post_link(); ?>

   <?php next_post_link(); ?>

<?php get_footer(); ?>