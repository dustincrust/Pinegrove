<?php
/**
 * Template Name: Meet the Team
 */

$title = get_field('title');
$heading = get_field('heading');
$subheading = get_field('subheading');

$all_team_members = new WP_Query(array(
        'post_type' => 'team_member',
        'order' => 'ASC',
        'orderby' => 'meta_value',
        'meta_key' => 'team_member_last_name',
        'posts_per_page' => -1,
));

get_header();

?>

    <section id="primary" class="content-area">
        <div id="main" class="site-main" role="main">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page');

            endwhile; // End of the loop.
            ?>

            <!-- Our Team Section -->
            <section id="our-team" class="ltbl-section py-5">
                <div class="container text-center">
                    <?php if ($title): ?>
                        <p class="teal block-title general-ss-name"><?php echo $title; ?></p>
                    <?php endif; ?>
                    <?php if ($heading): ?>
                        <h1 class="center-main-heading mb-3"><?php echo $heading; ?></h1>
                    <?php endif; ?>
                    <?php if ($subheading): ?>
                        <p class="our-services-subheading mx-auto lead font-weight-lighter ltbl-text"><?php echo $subheading; ?></p>
                    <?php endif; ?>
                </div>
            </section>

            <section class="teamMembers pt-5">
                <div class="teamMembers__block container">
                    <div class="teamMembers__blockItems">
                        <?php
                        if ($all_team_members->have_posts()) {
                            while ($all_team_members->have_posts()) {
                                $all_team_members->the_post();
                                get_template_part('template-parts/team-member-card');
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
            </section>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
