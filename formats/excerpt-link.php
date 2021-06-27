<!-- Post title info -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php atticus_finch_edit_post(); ?>

<?php if ( get_theme_mod( 'atticus_finch_link_title') == '1' ) { ?>
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<span class="fa fa-link fa-rotate-90"></span>
			<?php the_title(); ?>
		</a>
	</h2>

<!-- Post content -->
<div class="post-content">

<?php } else { ?>
	<div class="post-content">
	<h2><a href="<?php echo get_permalink(); ?>"><span class="fa fa-link fa-rotate-90 notitle"></span></a></h2>
<?php } ?>

	<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'thumbnail' );
		} 
	?>

<?php
	if ( get_theme_mod( 'atticus_finch_link_excerpt' ) == '1' ) {
		the_excerpt();
			} else {
		the_content();
	}
?>

	<div class="clear"></div>

</div><!-- end post content -->

	<?php get_template_part( 'inc/excerpt', 'short-meta' ); ?>

</div><!-- end "Entry" -->
