<?php
// Template Name: Blocks with Page Header

$page_header = get_field('page_header');

get_header();
?>

	<section id="primary" class="content-area col-sm-12">
		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( !empty('$page_header') ) : ?>
					<section class="ltbl-section py-5">
						<div class="container text-center">
							<?php
							echo ($page_header['label']) ? '<p class="teal block-title general-ss-name">' . $page_header['label'] . '</p>' : '';
							echo ($page_header['heading']) ? '<h1 class="center-main-heading mb-3">' . $page_header['heading'] . '</h1>' : '';
							echo ($page_header['subhead']) ? '<p class="our-process-subheading lead font-weight-lighter ltbl-text">' . $page_header['subhead'] . '</p>' : '';
							?>
						</div>
					</section>
				<?php endif; ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div class="container container--1140">
							<?php the_content(); ?>
						</div>
					</div>
				</article>

			<?php endwhile; // End of the loop. ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
