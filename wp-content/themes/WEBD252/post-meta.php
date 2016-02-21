 <div class="post-meta u-text-overlay">

  <span class="post-meta__author"><?php the_author(); ?></span>


  <br />

  <span class="post-meta__date"><?php the_time('F j, Y'); // display Month, date , year ?></span>

  <span class="post-meta__time"> ~ <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; //The difference is returned in a human readable format such as "1 hour", "5 mins", "2 days".?></span>

  <br>

  <?php post_read_time(); ?>

  <br />

  <span class="comment-count"><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></span>

  <?php the_tags( '<ul class="post-meta__tags"><li class="post-meta__tags__item meta-tags--overlay">', '</li><li class="post-meta__tags__item meta-tags--overlay">', '</li></ul>' ); ?>


</div>