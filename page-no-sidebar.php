<?php
/**
 * <?php
 *
 * Template Name: Full Width Page
 *
 *
 * @package Atticus Finch
 */

get_header();

?>

<div id="content">

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php atticus_finch_edit_post(); ?>

<?php do_action( 'atticus_finch_before_post_title' ); ?>

<h1 class="post-title">
	<span class="dashicons dashicons-admin-page"></span>
	<?php the_title(); ?>
</h1>

<!-- Start the loop -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'inc/page', 'main' ); ?>

<!-- End the loop -->
<?php endwhile; ?>
<?php endif; ?>

</div> <!-- end Content -->

<?php get_footer(); ?>
