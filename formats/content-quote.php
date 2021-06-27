<!-- Post title info -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php atticus_finch_edit_post(); ?>

	<?php do_action( 'atticus_finch_before_post_title' ); ?>

<?php if ( get_theme_mod( 'atticus_finch_quote_title') == '1' ) { ?>
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<span class="fa fa-quote-left"></span>
			<?php the_title(); ?>
			<span class="fa fa-quote-right"></span>
		</a>
	</h2>

<?php } else { ?>
	<h2><span class="fa fa-quote-left notitle"></span></h2>
<?php } ?>

<?php get_template_part( 'inc/content', 'main' ); ?>
