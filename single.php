<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Atticus Finch
 */

get_header();

?>

<?php get_sidebar(); ?>

<div id="content">

<article>
<!-- Start the loop -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part( 'formats/content', get_post_format() ); ?>

<!-- End the loop -->
<?php endwhile; ?>
<?php endif; ?>

</article>

</div> <!-- end Content -->

<div class="clear"></div>

<?php get_footer(); ?>