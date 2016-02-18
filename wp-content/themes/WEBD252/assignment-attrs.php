  <?php
          $due_date = get_post_meta( get_the_ID(), 'Due Date', true );
                  // Check if the custom field has a value.
          if ( ! empty( $due_date ) ):  ?>

          <br>
          <div class="l-custom-meta-container u-text-overlay">
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