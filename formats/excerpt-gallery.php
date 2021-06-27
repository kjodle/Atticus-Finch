<!-- Post title info -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php atticus_finch_edit_post(); ?>

	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<?php
			if ( post_password_required() ) {
				echo '<span class="fa fa-key fa-rotate-90"></span>';
			} else {
				echo '<span class="fa fa-th"></span>';
			}
		?>
		<?php the_title(); ?>
		</a>
	</h2>

<!-- Post content -->
<div class="post-content">

	<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'thumbnail' );
		} 
	?>

	<?php the_excerpt(); ?>

	<div class="clear"></div>

</div><!-- end post content -->

	<?php get_template_part( 'inc/excerpt', 'entry-meta' ); ?>

</div><!-- end "Entry" -->
