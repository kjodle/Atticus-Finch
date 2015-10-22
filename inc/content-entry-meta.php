	<div class="clear"></div>
	<div id="post-meta">
	<?php do_action( 'atticus_finch_before_post_meta' ); ?>
		<div class="list-pub">
			<?php atticus_finch_pub(); ?>
		</div>
		<div class="list-cat">
			<?php atticus_finch_cat(); ?>
		</div>
		<div class="list-tags">
			<?php atticus_finch_tags(); ?>
		</div>
	<?php do_action( 'atticus_finch_after_post_meta' ); ?>
	</div>
