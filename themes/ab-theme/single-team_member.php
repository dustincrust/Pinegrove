<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

$firstName = get_field('team_member_first_name');
$lastName = get_field('team_member_last_name');
$image = get_field('team_member_image');
$picture = $image['sizes']['large'];
$avatar = get_field('team_member_avatar_image')?:$image;
$avatarSrc = $avatar ? $avatar['sizes']['large']:false;
$creds = get_field('team_member_credential_initials');
$title = get_field('team_member_title');
$phone = get_field('team_member_phone');
$fax = get_field('team_member_fax_number');
$email = get_field('team_member_email_address');
$address = get_field('team_members_office_address');
$bio = get_field('about_the_team_member');
$question1 = get_field('question_1');
$question2 = get_field('question_2');
$question3 = get_field('question_3');
$response1 = get_field('response_1');
$response2 = get_field('response_2');
$response3 = get_field('response_3');
$contactFormId = get_field('wpforms_id','option');
get_header(); ?>

    <section id="primary" class="content-area ltbl-section">
        <div id="main" class="site-main" role="main">

            <?php
            while (have_posts()) : the_post();
            endwhile; // End of the loop.
            ?>

            <!-- Contact Card -->
            <section class="personCard">
                <div class="testimonial-container mx-auto">
                    <div class="mx-auto team-member-bio-card">
                        <div class="team-member-card-thumbnail">
                            <div class="team-member-bio-img-container about-us-img-container">
                                <?php if ($image): ?>
                                    <img src="<?php echo $picture; ?>" class="about-us-img">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="team-member-card-info">
                            <div class="text-center-sm pt-4">
                                <?php if ($phone || $email || $address): ?>
                                    <div class="team-member-card-heading-wrapper">
                                        <h1 class="team-member-card-heading"><?php echo $firstName . ' '; ?><?php echo $lastName; ?></h1>
                                        <?php if ($title): ?>
                                            <h3 class="d-inline our-process-subheading"><?php echo $title; ?></h3>
                                        <?php endif; ?>
                                        <?php if ($creds): ?>
                                            <h3 class="d-inline our-process-subheading">
                                                - <?php echo $creds; ?></h3>
                                        <?php endif; ?>
                                    </div>
                                    <div class="team-member-card-heading-wrapper">
                                        <div class="card-phone-fax-wrapper">
                                            <?php if ($phone): ?>
                                                <h3 class="phone">
                                                    <span class="phone-icon">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M9.58921 12.7999L10.8642 10.6635L11.1993 10.1022L11.8277 10.2817L17.3033 11.8463L18 12.0453L17.9137 12.7647L17.3815 17.2082L17.2867 18L16.4904 17.9559C13.8471 17.8094 11.2294 17.0641 8.85872 15.7189C7.52173 14.9604 6.26449 14.0117 5.1264 12.8736C3.98832 11.7355 3.03957 10.4782 2.28099 9.14135C0.935893 6.77059 0.190561 4.15293 0.0441582 1.50957L0 0.713418L0.791786 0.61852L5.23523 0.0861735L5.95469 0L6.15375 0.696735L7.71819 6.17227L7.89773 6.80082L7.33653 7.13579L5.20003 8.41087C5.76735 9.26166 6.42666 10.0697 7.17827 10.8214C7.92995 11.573 8.73827 12.2325 9.58921 12.7999Z"
                                                                      fill="#183B56"/>
                                                        </svg></span>
                                                    <span class="teal"><a
                                                                href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></span>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if ($fax): ?>
                                                <div class="fax">
                                                    <h3><?= __('Fax:', 'ab-theme'); ?> <span
                                                                class="fax-value"><?php echo $fax; ?></span></h3>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <?php if ($email): ?>
                                            <div class="mail-icon">
                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M0 0.5H18V2.23667L9.00008 7.14575L0 2.2366V0.5ZM0 3.94523V15.5H18V3.9453L9.00008 8.85433L0 3.94523Z"
                                                          fill="#183B56"/>
                                                </svg>
                                                <a href="mailto:<?php echo $email; ?>">
                                                    <h3 class="teal"><?php echo $email; ?></h3>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($address): ?>
                                            <div class="home-icon">
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M9 0.592896L18 8.6929V19.4072H0V8.6929L9 0.592896ZM10.6363 19.4072V13.68H7.36367V19.4072H10.6363Z"
                                                          fill="#183B56"/>
                                                </svg>
                                                <h3 class="light-weight no-p-bottom mb-0"><?php echo $address; ?></h3>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="cta-wrapper">
                                        <a class="btn team-member-card-cta"
                                           href="#contactForm"><?= __('Contact ', 'ab-theme'); ?><?php echo $firstName; ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Contact Card -->

            <section class="personDescription">
                <div class="testimonial-container mx-auto">
                    <div class="personDescriptionWrapper">
                        <div class="personDescriptionContent">

                            <!-- Bio -->
                            <?php if ($bio): ?>
                                <h2 class="description-heading ltbl-text">About <?php echo $firstName; ?>:</h2>
                                <div class="description-content"><?php echo $bio; ?></div>
                            <?php endif; ?>
                            <!-- / Bio -->
                            <!-- Question 1 -->
                            <?php if ($response1 && $question1): ?>
                                <h2 class="description-heading ltbl-text"><?php echo $question1; ?></h2>
                                <div class="description-content">"<?php echo $response1; ?>"
                                </div>
                            <?php endif; ?>
                            <!-- / Question 1 -->
                            <!-- Question 2 -->
                            <?php if ($response2 && $question2): ?>
                                <h2 class="description-heading ltbl-text"><?php echo $question2; ?></h2>
                                <div class="description-content">"<?php echo $response2; ?>"
                                </div>
                            <?php endif; ?>
                            <!-- / Question 2 -->
                            <!-- Question 3 -->
                            <?php if ($response3 && $question3): ?>
                                <h2 class="description-heading ltbl-text"><?php echo $question3; ?></h2>
                                <div class="description-content">"<?php echo $response3; ?>"
                                </div>
                            <?php endif; ?>
                            <!-- / Question 3 -->
                        </div>

                        <div id="contactForm" class="personContactForm">
                            <div class="contactForm__person">
                                <div class="contactForm__personAvatar">
                                    <?php if ($avatar): ?>
                                        <img src="<?php echo $avatarSrc; ?>" class="contactForm__personAvatar--image">
                                    <?php endif; ?>
                                </div>
                                <div class="contactForm__personName">
                                    <?php echo __('Connect with ', 'ab-theme') . '' . $firstName; ?>
                                </div>
                                <div class="contactForm__form">
                                    <?php echo do_shortcode('[wpforms id="'.$contactFormId.'" title="false"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
