<!-- Post content -->

	<div class="post-content">

		<?php do_action( 'atticus_finch_post_top' ); ?>

		<?php the_content(); ?>
		<div class="clear"></div>

		<?php do_action( 'atticus_finch_post_bottom' ); ?>

<div id="page-info">
	<p>
		<?php
			 _e( 'Published on: ', 'atticus-finch' );
			the_date();
		?>
	</p>
	<p>
		<?php
			 _e( 'Lasted edited on: ', 'atticus-finch' );
			the_modified_date();
		?>
	</p>
</div>

		<?php atticus_finch_print_options() ?>

	</div><!-- end post content -->


	<?php atticus_finch_comment_display(); ?> 


	<?php do_action( 'atticus_finch_after_post_content' ); ?>

