<?php
/**
 * Template Name: Left Sidebar
 */

get_header();
// get_sidebar();
?>
    <section id="primary" class="content-area col d-flex justify-content-center">
        <div id="main" class="page-wrap site-main text-center sidebar-container" role="main">
            <div id="sidebar">
                <p class="bl-font">Share</p>
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );
                endwhile; // End of the loop.
                ?>
            </div>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
