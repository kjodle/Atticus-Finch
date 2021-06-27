<?php 

// Our action hook widget areas -- only display them if active

// header.php action hooks

if ( get_theme_mod( 'atticus_finch_before_header') == '1' ) :
add_action('atticus_finch_before_header', 'atticus_finch_before_header_fc' );
function atticus_finch_before_header_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_header' ) ) {
	echo '<div id="atticus_finch_before_header" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_header' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_after_top_menu') == '1' ) :
add_action('atticus_finch_after_top_menu', 'atticus_finch_after_top_menu_FC' );
function atticus_finch_after_top_menu_FC(){
	if ( is_active_sidebar( 'atticus_finch_after_top_menu' ) ) {
	echo '<div id="atticus_finch_after_top_menu" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_after_top_menu' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_before_social_media') == '1' ) :
add_action('atticus_finch_before_social_media', 'atticus_finch_before_social_media_fc' );
function atticus_finch_before_social_media_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_social_media' ) ) {
	echo '<div id="atticus_finch_before_social_media" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_social_media' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_before_primary_menu') == '1' ) :
add_action('atticus_finch_before_primary_menu', 'atticus_finch_before_primary_menu_fc' );
function atticus_finch_before_primary_menu_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_primary_menu' ) ) {
	echo '<div id="atticus_finch_before_primary_menu" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_primary_menu' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_after_header') == '1' ) :
add_action('atticus_finch_after_header', 'atticus_finch_after_header_fc' );
function atticus_finch_after_header_fc(){
	if ( is_active_sidebar( 'atticus_finch_after_header' ) ) {
	echo '<div id="atticus_finch_after_header" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_after_header' );
	echo '</div>';
	}
}
endif;

// index.php action hooks

if ( get_theme_mod( 'atticus_finch_container_top') == '1' ) :
add_action('atticus_finch_container_top', 'atticus_finch_container_top_fc' );
function atticus_finch_container_top_fc(){
	if ( is_active_sidebar( 'atticus_finch_container_top' ) ) {
	echo '<div id="atticus_finch_container_top" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_container_top' );
	echo '</div><div class="clear"></div>';
	}
}
endif;

// content.php action hooks

if ( get_theme_mod( 'atticus_finch_before_post_title') == '1' ) :
add_action('atticus_finch_before_post_title', 'atticus_finch_before_post_title_fc' );
function atticus_finch_before_post_title_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_post_title' ) ) {
	echo '<div id="atticus_finch_before_post_title" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_post_title' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_before_post_content') == '1' ) :
add_action('atticus_finch_before_post_content', 'atticus_finch_before_post_content_fc' );
function atticus_finch_before_post_content_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_post_content' ) ) {
	echo '<div id="atticus_finch_before_post_content" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_post_content' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_post_top') == '1' ) :
add_action('atticus_finch_post_top', 'atticus_finch_post_top_fc' );
function atticus_finch_post_top_fc(){
	if ( is_active_sidebar( 'atticus_finch_post_top' ) ) {
	echo '<div id="atticus_finch_post_top" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_post_top' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_post_bottom') == '1' ) :
add_action('atticus_finch_post_bottom', 'atticus_finch_post_bottom_fc' );
function atticus_finch_post_bottom_fc(){
	if ( is_active_sidebar( 'atticus_finch_post_bottom' ) ) {
	echo '<div id="atticus_finch_post_bottom" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_post_bottom' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_after_post_content') == '1' ) :
add_action('atticus_finch_after_post_content', 'atticus_finch_after_post_content_fc' );
function atticus_finch_after_post_content_fc(){
	if ( is_active_sidebar( 'atticus_finch_after_post_content' ) ) {
	echo '<div id="atticus_finch_after_post_content" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_after_post_content' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_before_post_meta') == '1' ) :
add_action('atticus_finch_before_post_meta', 'atticus_finch_before_post_meta_fc' );
function atticus_finch_before_post_meta_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_post_meta' ) ) {
	echo '<div id="atticus_finch_before_post_meta" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_post_meta' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_after_post_meta') == '1' ) :
add_action('atticus_finch_after_post_meta', 'atticus_finch_after_post_meta_fc' );
function atticus_finch_after_post_meta_fc(){
	if ( is_active_sidebar( 'atticus_finch_after_post_meta' ) ) {
	echo '<div id="atticus_finch_after_post_meta" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_after_post_meta' );
	echo '</div>';
	}
}
endif;

// comments.php action hooks

if ( get_theme_mod( 'atticus_finch_before_comments') == '1' ) :
add_action('atticus_finch_before_comments', 'atticus_finch_before_comments_fc' );
function atticus_finch_before_comments_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_comments' ) ) {
	echo '<div id="atticus_finch_before_comments" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_comments' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_after_comments') == '1' ) :
add_action('atticus_finch_after_comments', 'atticus_finch_after_comments_fc' );
function atticus_finch_after_comments_fc(){
	if ( is_active_sidebar( 'atticus_finch_after_comments' ) ) {
	echo '<div id="atticus_finch_after_comments" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_after_comments' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_before_comment_form') == '1' ) :
add_action('atticus_finch_before_comment_form', 'atticus_finch_before_comment_form_fc' );
function atticus_finch_before_comment_form_fc(){
	if ( comments_open() ) : {
		if ( is_active_sidebar( 'atticus_finch_before_comment_form' ) ) {
		echo '<div id="atticus_finch_before_comment_form" class="atticus-finch-action-hook">';
		dynamic_sidebar( 'atticus_finch_before_comment_form' );
		echo '</div>';
		}
	}
	endif;
}
endif;

if ( get_theme_mod( 'atticus_finch_after_comment_form') == '1' ) :
add_action('atticus_finch_after_comment_form', 'atticus_finch_after_comment_form_fc' );
function atticus_finch_after_comment_form_fc(){
	if (comments_open() ) : {
		if ( is_active_sidebar( 'atticus_finch_after_comment_form' ) ) {
		echo '<div id="atticus_finch_after_comment_form" class="atticus-finch-action-hook">';
		dynamic_sidebar( 'atticus_finch_after_comment_form' );
		echo '</div>';
		}
	}
	endif;
}
endif;

// footer.php action hooks

if ( get_theme_mod( 'atticus_finch_container_bottom') == '1' ) :
add_action('atticus_finch_container_bottom', 'atticus_finch_container_bottom_fc' );
function atticus_finch_container_bottom_fc(){
	if ( is_active_sidebar( 'atticus_finch_container_bottom' ) ) {
	echo '<div class="clear"></div><div id="atticus_finch_container_bottom" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_container_bottom' );
	echo '</div><div class="clear"></div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_before_footer_menu') == '1' ) :
add_action('atticus_finch_before_footer_menu', 'atticus_finch_before_footer_menu_fc' );
function atticus_finch_before_footer_menu_fc(){
	if ( is_active_sidebar( 'atticus_finch_before_footer_menu' ) ) {
	echo '<div id="atticus_finch_before_footer_menu" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_before_footer_menu' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_footer_top') == '1' ) :
add_action('atticus_finch_footer_top', 'atticus_finch_footer_top_fc' );
function atticus_finch_footer_top_fc(){
	if ( is_active_sidebar( 'atticus_finch_footer_top' ) ) {
	echo '<div id="atticus_finch_footer_top" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_footer_top' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_footer_bottom') == '1' ) :
add_action('atticus_finch_footer_bottom', 'atticus_finch_footer_bottom_fc' );
function atticus_finch_footer_bottom_fc(){
	if ( is_active_sidebar( 'atticus_finch_footer_bottom' ) ) {
	echo '<div id="atticus_finch_footer_bottom" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_footer_bottom' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'atticus_finch_after_footer') == '1' ) :
add_action('atticus_finch_after_footer', 'atticus_finch_after_footer_fc' );
function atticus_finch_after_footer_fc(){
	if ( is_active_sidebar( 'atticus_finch_after_footer' ) ) {
	echo '<div id="atticus_finch_after_footer" class="atticus-finch-action-hook">';
	dynamic_sidebar( 'atticus_finch_after_footer' );
	echo '</div>';
	}
}
endif;

// Register our action hooks as widget areas
// codex.wordpress.org/Widgetizing_Themes
function greybox_action_hook_widgets() {

// Header widgets

if ( get_theme_mod( 'atticus_finch_before_header') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Header',
		'id'            => 'atticus_finch_before_header',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages just above the header and the "above header menu" (if you are using one).', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-header-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_after_top_menu') == '1' ) :
	register_sidebar( array(
		'name'          => 'After Top Menu',
		'id'            => 'atticus_finch_after_top_menu',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages below the top menu and above the site name.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-after-top-menu-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_before_social_media') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Social Media',
		'id'            => 'atticus_finch_before_social_media',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages to the left of the title and to the right of the social media menu.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-social-media-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_before_primary_menu') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Primary Menu',
		'id'            => 'atticus_finch_before_primary_menu',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages above the primary menu.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-primary-menu-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_after_header') == '1' ) :
	register_sidebar( array(
		'name'          => 'After Header',
		'id'            => 'atticus_finch_after_header',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the header and before the main content and sidebar.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-after-header-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

// Index widgets

if ( get_theme_mod( 'atticus_finch_container_top') == '1' ) :
	register_sidebar( array(
		'name'          => 'Top of Container',
		'id'            => 'atticus_finch_container_top',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages above the sidebar and content.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-container-top-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

// Content widgets

if ( get_theme_mod( 'atticus_finch_before_post_title') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Post Title',
		'id'            => 'atticus_finch_before_post_title',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the post title.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-post-title-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_before_post_content') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Post Content',
		'id'            => 'atticus_finch_before_post_content',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the title and before the post content.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-post-content-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_post_top') == '1' ) :
	register_sidebar( array(
		'name'          => 'Top of Post',
		'id'            => 'atticus_finch_post_top',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the top of the post.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-post-top-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_post_bottom') == '1' ) :
	register_sidebar( array(
		'name'          => 'Bottom of Post',
		'id'            => 'atticus_finch_post_bottom',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the bottom of the post.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-post-bottom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_after_post_content') == '1' ) :
	register_sidebar( array(
		'name'          => 'After Post Content',
		'id'            => 'atticus_finch_after_post_content',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the post content.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-after-post-content-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_before_post_meta') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Post Meta',
		'id'            => 'atticus_finch_before_post_meta',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the post meta.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-post-meta-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_after_post_meta') == '1' ) :
	register_sidebar( array(
		'name'          => 'After Post Meta',
		'id'            => 'atticus_finch_after_post_meta',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the post meta.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-after-post-meta-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

// Comments widgets

if ( get_theme_mod( 'atticus_finch_before_comments') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Comments',
		'id'            => 'atticus_finch_before_comments',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the comments.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-comments-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_after_comments') == '1' ) :
	register_sidebar( array(
		'name'          => 'After Comments',
		'id'            => 'atticus_finch_after_comments',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the comments.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-after-comments-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_before_comment_form') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Comment Form',
		'id'            => 'atticus_finch_before_comment_form',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the comment form.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-comment-form-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_after_comment_form') == '1' ) :
	register_sidebar( array(
		'name'          => 'After Comment Form',
		'id'            => 'atticus_finch_after_comment_form',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the comment form.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-after-comment-form-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

// Footer widgets

if ( get_theme_mod( 'atticus_finch_container_bottom') == '1' ) :
	register_sidebar( array(
		'name'          => 'Bottom of Container',
		'id'            => 'atticus_finch_container_bottom',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the footer.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-container-bottom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_before_footer_menu') == '1' ) :
	register_sidebar( array(
		'name'          => 'Before Footer Menu',
		'id'            => 'atticus_finch_before_footer_menu',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the footer menu.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-before-footer-menu-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_footer_top') == '1' ) :
	register_sidebar( array(
		'name'          => 'Footer Top',
		'id'            => 'atticus_finch_footer_top',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the top of the footer.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-footer-top-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_footer_bottom') == '1' ) :
	register_sidebar( array(
		'name'          => 'Footer Bottom',
		'id'            => 'atticus_finch_footer_bottom',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the bottom of the footer.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-footer-bottom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'atticus_finch_after_footer') == '1' ) :
	register_sidebar( array(
		'name'          => 'After Footer',
		'id'            => 'atticus_finch_after_footer',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the footer.', 'atticus-finch' ),
		'before_widget' => '<div class="atticus-finch-after-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;



} // end function
add_action( 'widgets_init', 'greybox_action_hook_widgets' );
