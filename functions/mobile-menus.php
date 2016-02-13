<?php

function atticus_finch_mobile_menus(){
	echo '
<script type="text/javascript">
	$("#aboveheadermenu").menumaker({
		title: "aboveheadermenu",
		breakpoint: 640,
		format: "select"
	});
	$("#belowheadermenu").menumaker({
		title: "belowheadermenu",
		breakpoint: 640,
		format: "multitoggle"
	});
	$("#footermenu").menumaker({
		title: "footermenu",
		breakpoint: 640,
		format: "select"
	});
</script>
';
}
add_action( 'wp_footer', 'atticus_finch_mobile_menus' );