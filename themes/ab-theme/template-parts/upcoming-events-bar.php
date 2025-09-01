<?php 
        $upcoming_event = get_upcoming_event();

       

        if ($upcoming_event) :
          $showUpcomingEvent = get_field('show_upcoming_top_bar_for_this_event',$upcoming_event['post_id']);
          if($showUpcomingEvent):
        ?>

        <div class="upcoming-evetns-bar">
        <p>
          <?php echo get_field('upcoming_event_top_bar_content',$upcoming_event['post_id']) ;?>
          <a href="<?php echo esc_url($upcoming_event['permalink'])?>">Sign up now!</a>
        </p>
       
        </div>
        <?php endif ;?>
<?php endif ;?>