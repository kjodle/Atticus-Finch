<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after #container div.
 *
 * @package Atticus Finch
 */

?>

<?php do_action( 'atticus_finch_container_bottom' ); ?>

<div class="clear"></div>

</div><!-- end #container -->

<footer>

	<?php do_action( 'atticus_finch_before_footer_menu' ); ?>

	<nav id="footer-menu">
		<?php wp_nav_menu( array(
			'theme_location' => 'footer-menu',
			'fallback_cb'    => '',
			'menu_class'     => '',
			'menu_id'        => 'footermenu-ul',
			'container'      => 'div',
			'container_id'   => 'footermenu',
			'depth'          => 4
			) );
		?>
		<div class="clear"></div>
	</nav>

	<?php do_action( 'atticus_finch_footer_top' ); ?>

	<?php
		atticus_finch_display_footer_copyright();
		atticus_finch_display_footer_credits();
	?>

	<div class="clear"></div>

	<?php do_action( 'atticus_finch_footer_bottom' ); ?>

</footer>

	<?php do_action( 'atticus_finch_after_footer' ); ?>

<?php wp_footer(); ?>

</body>
</html>
