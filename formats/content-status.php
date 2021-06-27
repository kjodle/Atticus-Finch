<!-- Post title info -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php atticus_finch_edit_post(); ?>

	<?php do_action( 'atticus_finch_before_post_title' ); ?>

<?php if ( get_theme_mod( 'atticus_finch_status_title') == '1' ) { ?>
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<span class="fa fa-at"></span>
			<?php the_title(); ?>
		</a>
	</h2>

<?php } else { ?>
	<h2 class="notitle-h2"><span class="fa fa-at notitle"></span></h2>
<?php } ?>

<?php get_template_part( 'inc/content', 'excerpt' ); ?>
