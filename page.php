<?php
/**
 * The page template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

</div><!-- end Post -->

</div><!-- end Content -->

<?php get_sidebar(); ?>

<div class="clear"></div>

<?php get_footer(); ?>
