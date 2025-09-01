<?php
/* Template Name: Landing Webinar
 *
 */

get_header();
?>

<?php echo get_template_part('/templates/landing-webinar/section', 'hero'); ?>
<?php echo get_template_part('/templates/landing-webinar/section', 'video'); ?>
<?php echo get_template_part('/templates/landing-webinar/section', 'about'); ?>
<?php echo get_template_part('/templates/landing-webinar/section', 'learn'); ?>
<?php echo get_template_part('/templates/landing-webinar/section', 'experts'); ?>
<?php echo get_template_part('/templates/landing-webinar/section', 'form'); ?>
<?php echo get_template_part('/templates/landing-webinar/section', 'partner'); ?>
<?php echo get_template_part('/templates/landing-webinar/testimonial-section'); ?>

<?php get_footer(); ?>