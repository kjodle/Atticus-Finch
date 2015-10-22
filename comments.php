<div id="comments">
	<?php if ( have_comments() ) : ?>
	<?php do_action( 'atticus_finch_before_comments' ); ?>

<?php
	if ( post_password_required() ) {
	echo '<p class="nocomments">This post is password protected. Enter the password to view comments.</p>';
	return;
	}
?>

<!-- Actual comments are listed here -->
		<h3 class="comments-title">
			<?php
				$post_comments = count( get_comments(array('type' => 'comment','post_id' => $post->ID)) );
				printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $post_comments, 'comments title', 'atticus-finch' ),
					number_format_i18n( $post_comments ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => false,
					'avatar_size' => 32,
					'type'        => 'comment',
					'format'      => 'xhtml',
				) );
			?>
		</ol><!-- .comment-list -->

<!-- Pingbacks and trackbacks are listed here -->
		<h3 class="comments-title">
			<?php
				$post_pings = count( get_comments(array( 'type' => 'pings', 'post_id' => $post->ID )) );
				if ( $post_pings > 0 ) {
				printf( _nx( 'One pingback/trackback on &ldquo;%2$s&rdquo;', '%1$s pingbacks/trackbacks on &ldquo;%2$s&rdquo;', $post_pings, 'pingbacks title', 'atticus-finch' ),
					number_format_i18n( $post_pings ), '<span>' . get_the_title() . '</span>' );
				}
			?>
		</h3>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 0,
					'type'        => 'pings',
					'format'      => 'xhtml',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'atticus-finch' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'atticus-finch' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'atticus-finch' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Sorry, but comments are closed.' , 'atticus-finch' ); ?></p>
		<?php endif; ?>

	<?php do_action( 'atticus_finch_after_comments' ); ?>
	<?php endif; // have_comments() ?>

	<?php do_action( 'atticus_finch_before_comment_form' ) ?>
	<?php comment_form(); ?>
	<?php do_action( 'atticus_finch_after_comment_form' ) ?>
</div>