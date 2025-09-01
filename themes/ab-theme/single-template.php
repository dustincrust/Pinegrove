<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

if(!in_array(get_the_ID(),[100,45,35,73,61])):


$featuredImage = get_field('featured_image');
$featuredPic = $featuredImage['sizes']['large']?:"";
$caption = get_field('featured_image_caption');
$headline = get_field('blog_headline');
$video = get_field('video');

$subheadline = get_field('subheadline');
$openingBody = get_field('opening_body');

$body1 = get_field('subheading_body_1');
$subheading1 = get_field('subheading_1');

$body2 = get_field('subheading_body_2');
$subheading2 = get_field('subheading_2');

$body3 = get_field('subheading_body_3');
$subheading3 = get_field('subheading_3');

$body4 = get_field('subheading_body_4');
$subheading4 = get_field('subheading_4');

$body5 = get_field('subheading_body_5');
$subheading5 = get_field('subheading_5');

$body6 = get_field('subheading_body_6');
$subheading6 = get_field('subheading_6');

$body7 = get_field('subheading_body_7');
$subheading7 = get_field('subheading_7');

$body8 = get_field('subheading_body_8');
$subheading8 = get_field('subheading_8');

$body9 = get_field('subheading_body_9');
$subheading9 = get_field('subheading_9');

$body10 = get_field('subheading_body_10');
$subheading10 = get_field('subheading_10');

$showAuthor = get_field('blog_post_show_author_and_date','option');
$isCustomAuthor = get_field('is_custom_post_author');
$teamMember = get_field('choose_team_member');

$combined_content = $subheadline . ' ' . $openingBody . ' ' .
                    $subheading1 . ' ' . $body1 . ' ' .
                    $subheading2 . ' ' . $body2 . ' ' .
                    $subheading3 . ' ' . $body3 . ' ' .
                    $subheading4 . ' ' . $body4 . ' ' .
                    $subheading5 . ' ' . $body5 . ' ' .
                    $subheading6 . ' ' . $body6 . ' ' .
                    $subheading7 . ' ' . $body7 . ' ' .
                    $subheading8 . ' ' . $body8 . ' ' .
                    $subheading9 . ' ' . $body9 . ' ' .
                    $subheading10 . ' ' . $body10;
$clean_content = wp_strip_all_tags($combined_content); // Removes HTML tags
// Step 2: Count the number of words
$word_count = str_word_count($clean_content);

// Step 3: Calculate the reading time (assuming 238 words per minute)
$reading_speed = get_field('average_reading_speed')?:258; // Average reading speed
$reading_time = ceil($word_count / $reading_speed); // Round up to the nearest minute


get_header();?>

	<section id="primary" class="content-area">
		<div id="main" class="site-main" role="main">
			<div class="container">

		
			<div class="row">
				<div class="col-12">
					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );

						endwhile; // End of the loop.
						?>

					<div class="d-flex justify-content-center">
						<!-- If no video exists, display the featured image -->
						<?php if (empty($video)): ?>
							<figure class="w-100">
								<div class="single-blog-image-container mb-1">
									<img class="w-100" src="<?php echo $featuredPic;?>" alt="<?php echo $featuredImage['alt'];?>">
								</div>
								<?php if ($caption): ?>
									<figcaption class="video-block-subheading text-center"><?php echo $caption;?></figcaption>
								<?php endif;?>
							</figure>
						<?php endif;?>
					</div>

				</div>

				<div class="col-sm-12 col-md-8 mb-5">
					<?php if($showAuthor): ;?>
						<div class="blog-post-author">
							<?php if($isCustomAuthor == 'user'): ;?>
							<?php $selectedAuthor = get_field('choosen_author'); ;?>
							<?php $selectedAvatar =  get_field('user_avatar','user_'.$customAuthor['ID']);?>
							<div class="post-author">
								<img src="<?php echo $selectedAvatar['url'] ;?>" alt="<?php echo $selectedAvatar['alt']?:$selectedAvatar['title'] ;?>">
								<!-- $customAuthor['ID'] -->
								<span><?php echo $selectedAuthor['display_name'] ;?></span>
							</div>
							<?php elseif($isCustomAuthor == 'custom'): ;?>
							<?php $customUser = get_field('custom_author_name') ;?>
							<?php $customAvatar = get_field('custom_author_avatar') ;?>
							<div class="post-author">
								<img src="<?php echo $customAvatar['url'] ;?>" alt="<?php echo $customAvatar['alt']?:$customAvatar['title'] ;?>">
								<!-- $customAuthor['ID'] -->
								<span><?php echo $customUser;?></span>
							</div>
							<?php elseif($isCustomAuthor == 'teammember'): ;?>
							<?php if($teamMember): ;?>
								<?php $memberUser = get_field('team_member_first_name',$teamMember[0]->ID) . ' ' . get_field('team_member_last_name',$teamMember[0]->ID);?>
								<?php $memberAvatar = get_field('team_member_avatar_image',$teamMember[0]->ID) ;?>
								<div class="post-author">
									<img src="<?php echo $memberAvatar['url'] ;?>" alt="<?php echo $memberAvatar['alt']?:$memberAvatar['title'] ;?>">
									<!-- $customAuthor['ID'] -->
									<span><?php echo $memberUser;?></span>
									<?php endif ;?>
								</div>
							<?php else: ;?>
							<div class="post-author">
								<?php $postUser =  get_userdata(get_post_field('post_author', get_the_ID())) ;?>
								<?php $postAvatar =  get_field('user_avatar','user_'.$postUser->ID);?>
							
								<img src="<?php echo $postAvatar['url'] ;?>" alt="<?php echo $postAvatar['alt']?:$postAvatar['title'] ;?>">
								<span><?php echo $postUser->display_name ;?></span>
							</div>
							<?php endif ;?>
							<div class="post-date">	<span class="time-to-read light-weight"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.90395 9.84271H8.99606C9.30176 9.84271 9.54484 9.60758 9.54484 9.29395V4.01029C9.54484 3.70456 9.30176 3.46938 8.99606 3.46938C8.69032 3.46938 8.45514 3.70456 8.45514 4.01029V8.75306H4.90395C4.59037 8.75306 4.35519 8.98824 4.35519 9.29395C4.35519 9.60758 4.59037 9.84271 4.90395 9.84271ZM9.0039 16.9922C13.3783 16.9922 17 13.3626 17 8.99609C17 4.62176 13.3704 1 8.99606 1C4.62957 1 1.00781 4.62176 1.00781 8.99609C1.00781 13.3626 4.6374 16.9922 9.0039 16.9922ZM9.0039 15.6595C5.30375 15.6595 2.34833 12.6962 2.34833 8.99609C2.34833 5.29593 5.29591 2.33268 8.99606 2.33268C12.6962 2.33268 15.6673 5.29593 15.6673 8.99609C15.6673 12.6962 12.704 15.6595 9.0039 15.6595Z" fill="#8B93A4" stroke="#8B93A4" stroke-width="0.2"/>
</svg>
<?php echo  $reading_time . ' ' . __('min', 'your-text-domain') ;?></span> <span>&bull;</span> <?php echo get_the_date('m/d/Y') ;?></div>

						</div>
							
					<?php endif ;?>
					<div class="post-content">
						<?php if ($headline): ?>
							<h1 class="light-weight font-size-40 baskerville dk-teal-font"><?php echo $headline?></h1>
						<?php endif;?>
						<?php if ($subheadline): ?>
							<div class="ltbl-text font-size-20"><?php echo $subheadline?></div>
						<?php endif;?>
						<?php if ($openingBody): ?>
							<div class="ltbl-text font-size-20"><?php echo $openingBody?></div>
						<?php endif;?>

							<!-- Video -->
							<?php if ($video): ?>
								<div class="vc-video-container d-flex align-items-center pb-3">
								
									<video class="w-100" controls>
										<source src="<?php echo $video['url'];?>" type="video/mp4">
									</video>

								</div>
							<?php endif;?>
							<!-- /Video -->
							

						<!-- Body 1 -->
						<?php if ($subheading1): ?>
							<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading1?></p>
						<?php endif;?>
						<?php if ($body1): ?>
							<div class="ltbl-text font-size-20"><?php echo $body1?></div>
						<?php endif;?>	
						<!-- / Body 1 -->

						<!-- Body 2 -->
						<?php if ($subheading2): ?>
							<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading2?></p>
						<?php endif;?>
						<?php if ($body2): ?>
							<div class="ltbl-text font-size-20"><?php echo $body2?></div>
						<?php endif;?>	
						<!-- / Body 2 -->

						<!-- Body 3 -->
						<?php if ($subheading3): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading3?></p>
						<?php endif;?>
						<?php if ($body3): ?>
							<div class="ltbl-text font-size-20"><?php echo $body3?></div>
						<?php endif;?>	
						<!-- / Body 3 -->

						<!-- Body 4 -->
						<?php if ($subheading4): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading4?></p>
						<?php endif;?>
						<?php if ($body4): ?>
							<div class="ltbl-text font-size-20"><?php echo $body4?></div>
						<?php endif;?>	
						<!-- / Body 4 -->

						<!-- Body 5 -->
						<?php if ($subheading5): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading5?></p>
						<?php endif;?>
						<?php if ($body5): ?>
							<div class="ltbl-text font-size-20"><?php echo $body5?></div>
						<?php endif;?>	
						<!-- / Body 5 -->

						<!-- Body 6 -->
						<?php if ($subheading6): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading6?></p>
						<?php endif;?>
						<?php if ($body6): ?>
							<div class="ltbl-text font-size-20"><?php echo $body6?></div>
						<?php endif;?>
						<!-- / Body 6 -->

						<!-- Body 7 -->
						<?php if ($subheading7): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading7?></p>
						<?php endif;?>
						<?php if ($body7): ?>
							<div class="ltbl-text font-size-20"><?php echo $body7?></div>
						<?php endif;?>
						<!-- / Body 7 -->

						<!-- Body 5 -->
						<?php if ($subheading8): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading8?></p>
						<?php endif;?>
						<?php if ($body8): ?>
							<div class="ltbl-text font-size-20"><?php echo $body8?></div>
						<?php endif;?>
						<!-- / Body 8 -->

						<!-- Body 9 -->
						<?php if ($subheading9): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading9?></p>
						<?php endif;?>
						<?php if ($body9): ?>
							<div class="ltbl-text font-size-20"><?php echo $body9?></div>
						<?php endif;?>
						<!-- / Body 9 -->

						<!-- Body 10 -->
						<?php if ($subheading10): ?>
						<p class="poppins-block-smaller-heading mb-3"><?php echo $subheading10?></p>
						<?php endif;?>
						<?php if ($body10): ?>
							<div class="ltbl-text font-size-20"><?php echo $body10?></div>
						<?php endif;?>
						<!-- / Body 10 -->
					</div>
				</div>
				<div class="d-none d-md-flex col-md-4 ">
					<div class="column-wrapper d-flex flex-column w-100">


					
							<div class="post-toc-nav--wrapper">
								<p class="post-toc-nav__title teal">Table of contents</p>
							
							</div>
							<?php if($teamMember): ;?>
								<?php $memberUserCTA = get_field('team_member_first_name',$teamMember[0]->ID) . ' ' . get_field('team_member_last_name',$teamMember[0]->ID);?>
								<?php $memberAvatarCTA = get_field('team_member_avatar_image',$teamMember[0]->ID) ;?>

								<div class="post-about-author">
									<div class="post-about-author-header">
											<div class="post-about-author__title teal">About the author</div>
									</div>
									<div class="post-about-author-content">
											<div class="post-about-author-details">
												<img class="post-about-author__avatar" src="<?php echo $memberAvatarCTA['url'] ;?>" alt="<?php echo $memberAvatarCTA['alt']?:$memberAvatarCTA['title'] ;?>">
												<!-- $customAuthor['ID'] -->
												<span class="post-about-author__name"><?php echo $memberUserCTA ;?></span>
								
											</div>
											<div class="post-about-author__desc">
													<?php the_field('short_description_for_cta') ;?>
											</div>
											<a href="<?php echo get_permalink($teamMember[0]->ID)?>" class="pinegrove-link">Find out more</a>
											<a href="<?php echo get_permalink($teamMember[0]->ID)?>#contactForm" class="pinegrove-button">Connect with <?php the_field('team_member_first_name',$teamMember[0]->ID) ;?></a>
									</div>

								</div>
							<?php endif;?>
							</div>
				</div>
			</div>
			</div>
		</div><!-- #main -->
	</section><!-- #primary -->
	
	<?php get_template_part( 'template-parts/similar-posts' );  ;?>
<?php else: 
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation(
					array(
						/* translators: Hidden accessibility text. */
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
						/* translators: Hidden accessibility text. */
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					)
				);

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>

<?php endif ;?>
<?php
get_footer();
