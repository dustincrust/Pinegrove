<?php
/**
* Template Name: Personal Success Story
 */

if(!isset($_POST['current-situation']) && !isset($_POST['looking-for']))
{
	wp_redirect( home_url(), 301 );
	exit;
}


$postId = null;
$secondaryPosts = array();
if(isset($_POST['current-situation'])) {
  switch($_POST['current-situation']) {
      case 1: 
        $postId = 1318;
        $secondaryPosts[] = 1711;
        break;
      case 2: 
        $postId = 1318;
        $secondaryPosts[] = 1719;
        break;
      case 3: 
        $postId = 1318;
        break;
      case 4: 
      case 5: 
        $postId = 1715;
        $secondaryPosts[] = 1719;
        break;
  }
}
if (isset($_POST['looking-for'])) {
  switch($_POST['looking-for']) {
      case 1: 
        $postId = $postId ? $postId : 1318;
        if ($postId !== 1318 && !in_array(1318, $secondaryPosts)) {
          $secondaryPosts[] =  1318;
        }
        if(!in_array(1719, $secondaryPosts)) {
          $secondaryPosts[] =  1719;
        }
        break;
      case 2: 
        $postId = $postId ? $postId : 1719;
        if ($postId !== 1719 && !in_array(1719, $secondaryPosts)) {
          $secondaryPosts[] =  1719;
        }
        break;
      case 3: 
        $postId = $postId ? $postId : 1711;
        if ($postId !== 1711 && !in_array(1711, $secondaryPosts)) {
          $secondaryPosts[] =  1711;
        }
        break;
      case 5: 
        $postId = $postId ? $postId : 1318;
        if ($postId !== 1318 && !in_array(1318, $secondaryPosts)) {
          $secondaryPosts[] =  1318;
        }
        break;
      case 6: 
        $postId = $postId ? $postId : 1715;
        if ($postId !== 1715 && !in_array(1715, $secondaryPosts)) {
          $secondaryPosts[] =  1715;
        }
        break;
  }
}

get_header(); ?>

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content-notitle' );

	endwhile; // End of the loop.
	?>

		<?php if(!$postId): ?>
			<div class="text-center pt-5">
				<h3 class="ltbl-text font-weight-lighter mb-2">It looks like we don't have a matching story for your particular situation yet.</h3>
				<h3 class="ltbl-text font-weight-lighter"> Feel free to view a success story below or <a href="/home">try a different search.</a></h3>
			</div>
			<section class="py-5">
				<div class="container">
					<p class="teal block-title general-ss-name text-center mb-3">Case Studies</p>
					<div class="row lg-container mx-auto d-flex justify-content-center">
					<?php
						$currentID = get_the_ID();
						$args = array(
							'category_name' => 'case-study',
							'order' => 'ASC',
						);

						$post_query = new WP_Query($args);

						if($post_query->have_posts() ) {
							while($post_query->have_posts() ) {
								$post_query->the_post();
								?>
									
								<div class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center">
									<div class="ss-container text-decoration-none color-inherit">
										<a href="<?php the_permalink();?>">
											<div class="team-member-about-us-container">
												<div class="ss-image-container-4 mx-auto">
													<?php $image = get_field('image_1', $post->ID); ?>
													<?php if($image): ?>
														<img class="success-story-image" src="<?php echo $image['sizes']['large']?>">
													<?php endif;?> 
												</div>
										
												<?php $quote = get_field('main_quote_1', $post->ID); ?>
												<?php if($quote): ?>
													<h1 class="pt-3 mb-0 teal success-story-header"><?php echo $quote; ?></h1>
												<?php endif;?> 
												<h4 class="success-story-name mb-0"><?php the_title(); ?></h4> 
												<?php $listItem1 = get_field('list_item_1', $post->ID); ?>
												<?php if($listItem1): ?>
													<div class='row sm-med-px-3'>
														<div class="col-2 sm-med-pr">
															<i class="fa fa-check ss-check"></i>
														</div>
														<div class="col-9 px-0">
															<p class="success-story-list mb-0"><?php echo $listItem1?></p>
														</div>
													</div>
												<?php endif;?> 
												<?php $listItem2 = get_field('list_item_2', $post->ID); ?>
												<?php if($listItem2): ?>
													<div class='row sm-med-px-3'>
														<div class="col-2 sm-med-pr">
															<i class="fa fa-check ss-check"></i>
														</div>
														<div class="col-9 px-0">
															<p class="success-story-list mb-0"><?php echo $listItem2?></p>
														</div>
													</div>
												<?php endif;?> 
												<?php $listItem3 = get_field('list_item_3', $post->ID); ?>
												<?php if($listItem3): ?>
													<div class='row sm-med-px-3'>
														<div class="col-2 sm-med-pr">
															<i class="fa fa-check ss-check"></i>
														</div>
														<div class="col-9 px-0">
															<p class="success-story-list mb-0"><?php echo $listItem3?></p>
														</div>
													</div>
												<?php endif;?> 
											</div>
										</a>
									</div>
								</div>
									
								<?php
								}
							}
					?>
					</div>


				</div>
			</section>

			<?php else: ?>	
			<?php
				$currentID = get_the_ID();
				$args = array(
					'category_name' => 'case-study',
					'post__in' => array($postId),
				);
				$post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
					while($post_query->have_posts() ) {
						$post_query->the_post();
						?>
					<section class="w-95 mx-auto">
						<div class="row w-80 mx-auto">
							<div class="col-12 col-md-4 d-flex justify-content-center">
								<div class="success-story-image-container">
									<?php $image = get_field('image_1', $post->ID); ?>
									<?php if($image): ?>
										<img src="<?php echo $image['url'];?>" class="success-story-image">
									<?php endif;?> 
								</div>
							</div>
							<div class="col-12 col-md-8 pb-5">
								<?php $name_1 = get_field('name_1', $post->ID); ?>
								<?php if($name_1): ?>
									<p class="teal block-title general-ss-name"><?php echo $name_1 ;?></p>
								<?php endif;?>
								<?php $quote_1 = get_field('main_quote_1', $post->ID); ?>
								<?php if($quote_1): ?>
									<h1 class="block-heading font-weight-lighter"><?php echo $quote_1;?></h1>
								<?php endif;?>

								<!-- Goals -->
								<div class="pb-3">
								<?php 
									$goal1 = get_field('goal_1-1', $post->ID); 
									$goal2 = get_field('goal_1-2', $post->ID); 
									$goal3 = get_field('goal_1-3', $post->ID); 
									$goal4 = get_field('goal_1-4', $post->ID); 
									$goal5 = get_field('goal_1-5', $post->ID); 
									?>
									<?php if($goal1 || $goal2 || $goal3):?>
										<h3 class="goals">Goals</h3>
										<ul class="success-story-ul">
											<?php if($goal1):?>
												<li><?php echo $goal1;?></li>
											<?php endif;?>
											<?php if($goal2):?>
												<li><?php echo $goal2;?></li>
											<?php endif;?>
											<?php if($goal3):?>
												<li><?php echo $goal3;?></li>
											<?php endif;?>
											<?php if($goal4):?>
												<li><?php echo $goal4;?></li>
											<?php endif;?>
											<?php if($goal5):?>
												<li><?php echo $goal5;?></li>
											<?php endif;?>
										</ul>
									<?php endif;?>
								</div>
								<!-- / Goals -->

								<!-- About -->
								<div class="pb-3">
								<?php 
									$about1 = get_field('about_1-1', $post->ID);
									$about2 = get_field('about_1-2', $post->ID);
									$about3 = get_field('about_1-3', $post->ID);
									$about4 = get_field('about_1-4', $post->ID); 
									?>
									<?php if($about1 || $about2 || $about3):?>
										<h3 class="goals">About</h3>
										<ul class="success-story-ul">
											<?php if($about1):?>
												<li><?php echo $about1;?></li>
											<?php endif;?>
											<?php if($about2):?>
												<li><?php echo $about2;?></li>
											<?php endif;?>
											<?php if($about3):?>
												<li><?php echo $about3;?></li>
											<?php endif;?>
											<?php if($about4):?>
												<li><?php echo $about4;?></li>
											<?php endif;?>
										</ul>
									<?php endif;?>
								</div>
								<!-- / About -->

								<!-- Areas of Focus -->
								<div class="pb-3">
								<?php 
									$area_of_focus1 = get_field('area_of_focus_1-1', $post->ID);
									$area_of_focus2 = get_field('area_of_focus_1-2', $post->ID);
									$area_of_focus3 = get_field('area_of_focus_1-3', $post->ID); ?>
									<?php if($area_of_focus1 || $area_of_focus2 || $area_of_focus3):?>
										<h3 class="goals">Areas of Focus</h3>
										<ul class="success-story-ul">
											<?php if($area_of_focus1):?>
												<li><?php echo $area_of_focus1;?></li>
											<?php endif;?>
											<?php if($area_of_focus2):?>
												<li><?php echo $area_of_focus2;?></li>
											<?php endif;?>
											<?php if($area_of_focus3):?>
												<li><?php echo $area_of_focus3;?></li>
											<?php endif;?>
										</ul>
									<?php endif;?>
								</div>
								<!-- Areas of Focus -->
								<div class="pb-3">
					<a href="/contact" class="pinegrove-button">Contact Us</a>
					</div>
							</div>
						</div>
					</section>
				<?php
			}
		}
	?>
			
	<!-- More Case Studies -->
	<section class="py-5">
		<div class="container wider">
			<p class="teal block-title general-ss-name text-center ">More Matching Case Studies</p>
			<div class="row lg-container mx-auto d-flex justify-content-center">
			<?php
				$currentID = get_the_ID();
				$args = array(
					'category_name' => 'case-study',
					'order' => 'ASC',
					'posts_per_page' => 3,
					'post__in' => $secondaryPosts,
				);

				$post_query = new WP_Query($args);

				if($post_query->have_posts() ) {
					while($post_query->have_posts() ) {
						$post_query->the_post();
						?>
							
						<div class="col-sm-12 col-md-4 d-flex justify-content-center text-decoration-none">
							<div class="ss-container text-decoration-none color-inherit">
								<a href="<?php the_permalink();?>">
									<div class="team-member-about-us-container">
										<div class="ss-image-container-4 mx-auto">
											<?php $image = get_field('image_1', $post->ID); ?>
											<?php if($image): ?>
												<img class="success-story-image" src="<?php echo $image['sizes']['large']?>">
											<?php endif;?> 
										</div>
								
										<?php $quote = get_field('main_quote_1', $post->ID); ?>
										<?php if($quote): ?>
											<a href="<?php the_permalink();?>"><h1 class="pt-3 mb-0 teal success-story-header"><?php echo $quote; ?></h1></a>
										<?php endif;?> 
										<h4 class="success-story-name mb-0"><?php the_title(); ?></h4> 
										<?php $listItem1 = get_field('list_item_1', $post->ID); ?>
										<?php if($listItem1): ?>
											<div class='row sm-med-px-3'>
												<div class="col-2 sm-med-pr">
													<i class="fa fa-check ss-check"></i>
												</div>
												<div class="col-9 px-0">
													<p class="success-story-list mb-0"><?php echo $listItem1?></p>
												</div>
											</div>
										<?php endif;?> 
										<?php $listItem2 = get_field('list_item_2', $post->ID); ?>
										<?php if($listItem2): ?>
											<div class='row sm-med-px-3'>
												<div class="col-2 sm-med-pr">
													<i class="fa fa-check ss-check"></i>
												</div>
												<div class="col-9 px-0">
													<p class="success-story-list mb-0"><?php echo $listItem2?></p>
												</div>
											</div>
										<?php endif;?> 
										<?php $listItem3 = get_field('list_item_3', $post->ID); ?>
										<?php if($listItem3): ?>
											<div class='row sm-med-px-3'>
												<div class="col-2 sm-med-pr">
													<i class="fa fa-check ss-check"></i>
												</div>
												<div class="col-9 px-0">
													<p class="success-story-list mb-0"><?php echo $listItem3?></p>
												</div>
											</div>
										<?php endif;?> 
										</a>
									</div>
								</a>
							</div>
						</div>
							
						<?php
						}
					}
			?>
			</div>


		</div>
	</section>
	<!-- / More Case Studies -->

		</div><!-- #main -->
	</section><!-- #primary -->
	<?php endif;?> 

<?php
get_footer();