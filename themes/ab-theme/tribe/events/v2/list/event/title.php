<?php
/**
 * View: List View - Single Event Title
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/event/title.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */
?>
<h3 class="text-decoration-none tribe-events-calendar-list__event-title tribe-common-h6 tribe-common-h4--min-medium">
	<a
		href="<?php echo esc_url( $event->permalink ); ?>"
		title="<?php echo esc_attr( $event->title ); ?>"
		rel="bookmark"
	>
		<?php
		// phpcs:ignore ?>
		<span class="text-decoration-none health-card-text poppins light-weight"><?php echo $event->title; ?></span>
		<span class="video-block-subheading line-clamp-1 module-1"><?php echo the_excerpt(); ?></span>
	</a>
</h3>


