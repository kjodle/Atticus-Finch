<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Atticus Finch
 */


if ( ! function_exists( 'atticus_finch_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function atticus_finch_posted_on() {

	$date = get_the_date();
	$modd = get_the_modified_date();

	if ( $modd == $date ) {
		printf(__( '<time class="entry-date published updated" datetime="%s">', 'atticus-finch' ), esc_attr( get_the_date( 'c' ) ) );
		echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
		printf(__( 'Posted on %s', 'atticus-finch' ), get_the_date() );
		$date;
		echo '</a></time>';
			} else {
		printf(__( '<time class="entry-date published updated" datetime="%s">', 'atticus-finch' ), esc_attr( get_the_date( 'c' ) ) );
		echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
		printf(__( 'Posted on %s', 'atticus-finch' ), get_the_date() );
		$date;
		echo '</a>; ';
		printf(__( '<time class="updated" datetime="%s">', 'atticus-finch') , esc_attr( get_the_modified_date( 'c' ) ) );
		printf(__( 'modified on %s', 'atticus-finch' ), get_the_modified_date() );
		echo '</time> ';

	}

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'atticus-finch' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
}
endif;





/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function atticus_finch_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'atticus_finch_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'atticus_finch_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so atticus_finch_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so atticus_finch_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in atticus_finch_categorized_blog.
 */
function atticus_finch_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'atticus_finch_categories' );
}
add_action( 'edit_category', 'atticus_finch_category_transient_flusher' );
add_action( 'save_post',     'atticus_finch_category_transient_flusher' );


/* My Stuff */


// Determine whether or not to show page navigation at bottom of index/archive
// Necessary because page navigation is in a styled <div> and should not appear
// on non-paginated pages
function atticus_finch_display_nav() {
	$atticus_finch_num_posts = wp_count_posts()->publish;
	$atticus_finch_posts_per_page = get_option('posts_per_page ');
	if ( $atticus_finch_num_posts > $atticus_finch_posts_per_page) { 
		echo '<div id="posts-nav">' . get_posts_nav_link(' &bull; ','&laquo; Newer Posts','Older Posts;') . '</div>';
	}
}


// Determine whether to display the comments box
function atticus_finch_comment_display() {
	$var = get_comments_number();
	if ( comments_open() || $var > 0 ) {
		comments_template();
	} else { echo '
	<div id="comments">
		<div id="respond">
			<p>' . __( 'Sorry, but comments are closed.', 'atticus-finch' ) . '</p>
		</div>
	</div>';
	}
}


// Display the time
// Included here if we need to change it later
function atticus_finch_date() {
	return get_the_time(get_option('date_format'));
}


// Display publication info as a translatable string in 'content-entry-meta.php'
function atticus_finch_pub() {
	$atticus_finch_author_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
	$atticus_finch_author_href = '<a href="' . $atticus_finch_author_link . '">' . get_the_author() . '</a>';
	echo '<a href="' . get_permalink() . '">';
	printf( __( 'Published on: %1$s by %2$s', 'atticus-finch' ), atticus_finch_date(), $atticus_finch_author_href );
	echo '</a>';
}


// Display category info as a translatable string in 'content-entry-meta.php'
function atticus_finch_cat() {
	$gbcat = get_the_category_list( ', ' );
	printf( __( 'Categorized under: %s', 'atticus-finch'), $gbcat );
}


// Display tags info as a translatable string in 'content-entry-meta.php'
function atticus_finch_tags() {
	$tags_array = has_tag();
	if (!empty($tags_array)) { 
		printf( __( 'Tagged with: %s', 'atticus-finch'), get_the_tag_list('', ', ', '' ) );
		} else {
		_e( 'This post has no tags.', 'atticus-finch' );
	}
}


// Display next post link only if a newer post exists
function atticus_finch_next_post_link() {
	$atticus_finch_npl = get_next_post_link();
	if ( empty ( $atticus_finch_npl ) ) {
		echo '<p>' . __( 'You are reading the newest post.', 'atticus-finch' ) . '</p>';
	} else {
		echo '<p>' . __( 'Read a newer post:', 'atticus-finch' ) . '</p>';
		next_post_link();
	}
}


// Display previous post link only if an older post exists
function atticus_finch_prev_post_link() {
	$atticus_finch_ppl = get_previous_post_link();
	if ( empty ( $atticus_finch_ppl ) ) {
		echo '<p>>' . __( 'You are reading the oldest post.', 'atticus-finch' ) . '</p>';
	} else {
		echo '<p>' . __( 'Read an older post:', 'atticus-finch' ) . '</p>';
		previous_post_link();
	}
}


// Add the URL information when printing
function atticus_finch_print_url() {
	echo '<p class="printonly printurl">';
	printf(__( 'Link for this article:', 'atticus-finch' ) );
	echo '<br /><span class="printurl-url">' . get_the_permalink() . '<span></p>';
}


// Add a "Read More" box on excerpts
function atticus_finch_read_more() {
	echo '<p class="read-more"><a href="' . get_the_permalink() . '">';
	printf(__( 'Read the complete article&hellip;', 'atticus-finch' ) );
	echo '</a></p>';
}


// Take care of wp_link_pages
function atticus_finch_link_pages() {
	$defaults = array(
		'before'           => '<div id="link-pages">' . __( 'This post has multiple pages:', 'atticus-finch' ),
		'after'            => '</div>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => '&ensp;',
		'nextpagelink'     => __( 'Next page', 'atticus-finch' ),
		'previouspagelink' => __( 'Previous page', 'atticus-finch' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
	wp_link_pages( $defaults );
}


// Print options
function atticus_finch_print_options() {
	if ( get_theme_mod( 'atticus_finch_print_copyright' ) == '1' ) {
		echo '<span class="printonly printcopyright">' . 
		get_theme_mod( 'atticus_finch_copyright', '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" id="cc-button" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.' ) . 
		'</span>';
	}
	if ( get_theme_mod( 'atticus_finch_print_url' ) == '1' ) {
		echo '<span class="printonly printurl">';
		printf(__( 'Permalink for this article:', 'atticus-finch' ) );
		echo '<br /><span class="printurl-url">' . get_the_permalink() . '<span></span>';
	}
}


// Edit post link, if user is logged in
function atticus_finch_edit_post() {
	if ( get_theme_mod( 'atticus_finch_edit_post_link' ) == '1' && is_user_logged_in() ) : {
		edit_post_link('Edit this post', '<p class="edit-post">', '</p>');
		}
	endif;
}


// Footer options
function atticus_finch_display_footer_copyright() {
	if ( get_theme_mod( 'atticus_finch_display_copyright' ) == '1' ) : {
		echo '<div id="copyright">' . 
		get_theme_mod( 'atticus_finch_copyright', '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" id="cc-button" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.' ) . 
		'</div>';
	}
	endif;
}

function atticus_finch_display_footer_credits() {
	if ( get_theme_mod( 'atticus_finch_display_credits') == '1' ) : {
		$afwp = '<a href="http://wordpress.org/">WordPress</a>';
		$afaf = '<a href="http://d12webdesign.com/">Atticus Finch Theme</a>';
		echo '<div id="credits">';
		printf(__( 'Powered by %1$s and the %2$s.', 'atticus-finch' ), $afwp, $afaf );
		echo '</div>';
	}
	endif;
}


// Custom CSS Option
function atticus_finch_custom_css_head() {
	$afcss = get_theme_mod( 'atticus_finch_custom_css' );
//	if ( !empty( $afcss ) ) {
	echo '<style type="text/css">/* Atticus Finch Custom CSS */' . $afcss . '</style>';
//	}
}


// Social Media
function atticus_finch_social_media_display() {
	if ( get_theme_mod( 'atticus_finch_rss' ) == '1' ) {
		echo '<a href="' . site_url() . '/feed" class="sm-rss"><span class="fa fa-rss-square"></span></a>';
	}

	$aftw = get_theme_mod( 'atticus_finch_twitter' );
	if ( !empty( $aftw ) ) {
		echo '<a href="' . get_theme_mod( 'atticus_finch_twitter' ) . '" target="_blank" class="sm-twitter"><span class="fa fa-twitter-square"></span></a>';
	}

	$aft2 = get_theme_mod( 'atticus_finch_twitter2' );
	if ( !empty( $aft2 ) ) {
		echo '<a href="' . get_theme_mod( 'atticus_finch_twitter2' ) . '" target="_blank" class="sm-twitter"><span class="fa fa-twitter-square"></span></a>';
	}

	$affb = get_theme_mod( 'atticus_finch_facebook' );
	if ( !empty( $affb ) ) {
		echo '<a href="' . get_theme_mod( 'atticus_finch_facebook' ) . '" target="_blank" class="sm-facebook"><span class="fa fa-facebook-square"></span></a>';
	}

	$afig = get_theme_mod( 'atticus_finch_instagram' );
	if ( !empty( $afig ) ) {
		echo '<a href="' . get_theme_mod( 'atticus_finch_instagram' ) . '" target="_blank" class="sm-instagram"><span class="fa fa-instagram"></span></a>';
	}

	$afyt = get_theme_mod( 'atticus_finch_youtube' );
	if ( !empty( $afyt ) ) {
		echo '<a href="' . get_theme_mod( 'atticus_finch_youtube' ) . '" target="_blank" class="sm-youtube"><span class="fa fa-youtube-square"></span></a>';
	}

	$afyt = get_theme_mod( 'atticus_finch_pinterest' );
	if ( !empty( $afyt ) ) {
		echo '<a href="' . get_theme_mod( 'atticus_finch_pinterest' ) . '" target="_blank" class="sm-pinterest"><span class="fa fa-pinterest-square"></span></a>';
	}

	$afam = get_theme_mod( 'atticus_finch_amazon' );
	if ( !empty( $afam ) ) {
		echo '<a href="' . get_theme_mod( 'atticus_finch_amazon' ) . '" target="_blank" class="sm-amazon"><span class="fa fa-amazon"></span></a>';
	}

}

