<?php
/**
 * The main template file.
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

<?php get_sidebar(); ?>

<div id="content">

	<!-- Post title info -->
	<div class="post" >
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<?php _e( '404: We can\'t find that page', 'atticus-finch' ); ?>
	</h2>

	<!-- Post content -->
	<div class="post-content">
		<p><img src='<?php echo get_template_directory_uri(); ?>/images/404.jpg' /></p>
		<p>
			<?php
				_e( 'Sorry, that page or post doesn\'t appear to be here. It may have been deleted, moved, or at the other end of an outdated link.', 'atticus-finch' );
			?>
		</p>
		<p>
			<?php
				_e( 'You can use the menus, categories, or tags to find what you are looking for. You can also use the search form below.', 'atticus-finch' );
			?>
		</p>
		<p id="404search">
			<?php
				get_search_form();
			?>
		</p>
	</div>

	</div><!-- end "post" -->

</div> <!-- end Content -->
<div class="clear"></div>

<?php get_footer(); ?>
