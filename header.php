<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="container">
 *
 * @package Atticus Finch
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Commented out on 2021.06.27 -->
<?php // atticus_finch_custom_css_head(); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'atticus_finch_before_header' ); ?>

<header>

	<nav id="top-menu">
		<?php wp_nav_menu( array(
			'theme_location' => 'top-menu',
			'fallback_cb'    => '',
			'menu_class'     => 'sf-menu',
			'menu_id'        => 'aboveheadermenu-ul',
			'container'      => 'div',
			'container_id'   => 'aboveheadermenu',
			'depth'          => 1
			) );
		?>
		<div class="clear"></div>
	</nav>

	<?php do_action( 'atticus_finch_after_top_menu' ); ?>

	<div id="header" style="background-image: url('<?php header_image(); ?>');">

		<div id="site-title">
			<?php if ( is_front_page() ){
				echo '<h1>' . get_option( 'blogname' ) . '</h1>';
			} else { ?>
				<h2><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h2>
			<?php
				}
			?>
		</div><!-- end #site-title -->

		<div id="site-desc">
			<?php
				if ( is_front_page() ){
					echo '<h2>' . get_option( 'blogdescription' ) . '</h2>';
				} else {
					echo '<h3>' . get_option( 'blogdescription' ) . '</h3>';
				}
			?>
		<div class="clear"></div>
		</div><!-- end #site-desc -->

<?php do_action( 'atticus_finch_before_social_media'); ?>

	<div id="social-media-menu" class="social-navigation">
<?php atticus_finch_social_media_display(); ?>
	<div class="clear"></div>
	</div><!-- end #social-media-menu -->

	</div><!-- end #header -->

<div class="clear"></div>

<?php do_action( 'atticus_finch_before_primary_menu' ); ?>

<!-- Commented out on 2021.06.27 -->
<?php // $walker = new Atticus_Finch_Menu_With_Description; ?>

	<nav id="primary-menu">
		<?php
			if ( get_theme_mod( 'atticus_finch_main_menu_desc' ) == 1 ) {
				$array = array(
				'theme_location' => 'primary-menu',
				'fallback_cb'    => '',
				'menu_class'     => 'sf-menu',
				'menu_id'        => 'belowheadermenu-ul',
				'container'      => 'div',
				'container_id'   => 'belowheadermenu',
				'depth'          => 3,
//				'walker'         => $walker,
				);
			} else {
				$array = array(
				'theme_location' => 'primary-menu',
				'fallback_cb'    => '',
				'menu_class'     => 'sf-menu',
				'menu_id'        => 'belowheadermenu-ul',
				'container'      => 'div',
				'container_id'   => 'belowheadermenu',
				'depth'          => 3,
				);
			}
			wp_nav_menu( $array );
		?>
		<div class="clear"></div>
	</nav>

<div class="clear"></div>

</header>

<?php do_action( 'atticus_finch_after_header' ); ?>

<div id="container"><!-- closing tag is in footer.php -->

<?php do_action( 'atticus_finch_container_top' ); ?>
