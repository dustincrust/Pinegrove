<?php
/* Template Name: New Landing Page
 *
 */

get_header();
?>

<?php echo get_template_part('/templates/parts/section', 'hero'); ?>
<?php echo get_template_part('/templates/parts/section', 'form'); ?>
<?php echo get_template_part('/templates/parts/section', 'about'); ?>
<?php echo get_template_part('/templates/parts/section', 'learn'); ?>
<?php echo get_template_part('/templates/parts/section', 'meeting'); ?>
<?php echo get_template_part('/templates/parts/section', 'partner'); ?>
<?php echo get_template_part('/templates/parts/testimonial-section'); ?>

<?php get_footer(); ?>