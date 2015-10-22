<?php
/**
 * The archive template file.
 *
 * Displays generic archives.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Atticus Finch
 */

get_header();

?>

<?php get_sidebar(); ?>

<div id="content">

<div id="archive-title">
	<?php if ( is_day() ) : ?>
		<?php printf( __( 'Daily Archive for %s', 'atticus-finch' ), '<span>' . get_the_date() . '</span>' ); ?>
	<?php elseif ( is_month() ) : ?>
		<?php printf( __( 'Monthly Archive for %s', 'atticus-finch' ), 
		/* translators: F will be replaced with month, and Y will be replaced with year, so "F Y" in English would be replaced with something like "June 2008". */
		'<span>' . get_the_date( __( 'F Y', 'atticus-finch' ) ) . '</span>' ); ?>
	<?php elseif ( is_year() ) : ?>
		<?php printf(__( 'Yearly Archive for %s', 'atticus-finch' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?>
	<?php else : ?>
		<?php _e( 'Blog Archive', 'atticus-finch' ); ?>
	<?php endif; ?>
</div>

<!-- Start the loop -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'formats/excerpt', get_post_format() ); ?>

<!-- End the loop -->
<?php endwhile; ?>
<?php endif; ?>

<?php atticus_finch_display_nav(); ?>
</div> <!-- end Content -->
<div class="clear"></div>

<?php get_footer(); ?>
