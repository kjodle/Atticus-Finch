<?php
/**
 * The category template file.
 *
 * Displays category archives.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Atticus Finch
 */

get_header();

?>

<?php get_sidebar(); ?>

<div id="content">

<div id="archive-title">
	<h2>
	<?php
		printf( __( 'Posts contained in the &ldquo;<span>%s</span>&rdquo; category:', 'atticus-finch' ), single_cat_title( '', false ) );
	?>
	</h2>
	<?php
		echo category_description();
	?>
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
