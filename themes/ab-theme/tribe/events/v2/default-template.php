<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();?>

<!-- Main Block -->
<section class="ltbl-section py-5">
    <div class="container text-center">
        <p class="teal block-title general-ss-name">Resources</p> 
        <h1 class="center-main-heading mb-3">Events</h1> 
        <h3 class="our-process-subheading events-subheading font-weight-lighter ltbl-text">Events at Pine Grove Financial Group are currently virtual, educational sessions about the current financial climate.</h3> 
    </div>
</section>
<!-- Main Block -->

<?php echo tribe( Template_Bootstrap::class )->get_view_html();
get_footer();
