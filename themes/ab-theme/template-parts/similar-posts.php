
<?php
$current_post_id = get_the_ID();
$categories = get_the_category($current_post_id);

if ($categories) {
    // Get the first category's ID (or modify to loop through all categories if necessary)
    $category_id = $categories[0]->term_id;

    // WP_Query arguments
    $args = array(
        'cat' => $category_id, // Get posts from the same category
        'post__not_in' => array($current_post_id), // Exclude the current post
        'posts_per_page' => 3, // Limit to 3 posts
        'orderby' => 'date', // Order by the latest posts
        'order' => 'DESC', // Latest first
    );

    // Custom query for latest posts
    $related_posts_query = new WP_Query($args);
}?>

<section class="similar-posts">
		<div class="container">
			<div class="row">
        <?php if ($related_posts_query->have_posts()) :
             while ($related_posts_query->have_posts()):  $related_posts_query->the_post();?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-5 terms">
                      <div class="blog-container">
                          <a href="<?= the_permalink(); ?>" class="card-link"></a>
                          <div class="blog-image-container">
                              <img class="blog-image" src="<?php the_post_thumbnail_url() ?>"/>
                          </div>
                          <?php $i = 0;
                          $sep = ', ';
                          $cats = '';
                          foreach ((get_the_category()) as $category) {
                              if (0 < $i)
                                  $cats .= $sep;
                              $cats .= $category->cat_name;
                              $i++;
                          }; ?>
                          <div class="blog-container-content">
                          <span class="grey block-title"><?php echo $cats; ?></span>
                          <h2 class="baskerville bl-font light-weight blog-module line-clamp-3 pb-0"><?php the_title(); ?></h2>

                          <?php $subheadline = get_field('subheadline', $post->ID); ?>
                          <?php if ($subheadline): ?>
                              <div class=" line-clamp ltbl-text light-weight">
                                  <?php echo $subheadline; ?>
                              </div>
                          <?php endif; ?>
                          <div class="fake-link teal text-decoration-none font-weight-bold">
                              <div><?php echo __('Read more', 'ab-theme'); ?></div>
                          </div>
                          </div>
                          
                      </div>

                  </div>
                            <?php  wp_reset_postdata(); ;?>
  

        <?php   endwhile; endif; ;?>
			</div>
		</div>
	</section>