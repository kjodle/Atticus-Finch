<!-- Post title info -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- closing tag in content-main.php -->

<?php atticus_finch_edit_post(); ?>

<?php do_action( 'atticus_finch_before_post_title' ); ?>

	<h2 id="post-<?php the_ID(); ?>" class="post-title">
	<?php
		if ( post_password_required() ) {
			echo '<span class="fa fa-key fa-rotate-90"></span>';
		} else {
			echo '<span class="fa fa-pencil"></span>';
		}
	?>
		<?php the_title(); ?>
	</h2>

<?php get_template_part( 'inc/content', 'main' ); ?>
