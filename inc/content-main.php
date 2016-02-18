<!-- Post content -->

	<div class="post-content">

		<?php do_action( 'atticus_finch_post_top' ); ?>

		<?php the_content(); ?>
		<div class="clear"></div>

		<?php do_action( 'atticus_finch_post_bottom' ); ?>

		<?php atticus_finch_print_options() ?>

	</div><!-- end post content -->

	<?php atticus_finch_post_top_link(); ?>

	<?php atticus_finch_link_pages(); ?>

	<?php get_template_part( 'inc/content', 'entry-meta' ); ?>

	<?php get_template_part( 'inc/content', 'post-nav' ); ?>

	<?php atticus_finch_comment_display(); ?> 

</div><!-- end post -->

	<?php do_action( 'atticus_finch_after_post_content' ); ?>
