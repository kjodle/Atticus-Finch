<?php

function atticus_finch_mobile_menus(){
	echo '
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#aboveheadermenu").menumaker({
		title: "' . get_theme_mod('atticus_finch_top_menu_name') . '",
		breakpoint: 640,
		format: "' . get_theme_mod('atticus_finch_top_menu_type') . '"
	});
	jQuery("#belowheadermenu").menumaker({
		title: "' . get_theme_mod('atticus_finch_main_menu_name') . '",
		breakpoint: 640,
		format: "' . get_theme_mod('atticus_finch_main_menu_type') . '"
	});
	jQuery("#footermenu").menumaker({
		title: "' . get_theme_mod('atticus_finch_footer_menu_name') . '",
		breakpoint: 640,
		format: "' . get_theme_mod('atticus_finch_footer_menu_type') . '"
	});
});
</script>
';
}
add_action( 'wp_footer', 'atticus_finch_mobile_menus' );