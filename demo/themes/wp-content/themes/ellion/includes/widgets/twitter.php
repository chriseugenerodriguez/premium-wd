<?php


// DON'T CALL ANYTHING

if ( !function_exists( 'add_action' ) ) {

	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';

	exit;

}


// INCLUDE WIDGET
require_once get_template_directory() . '/includes/widgets/twitter/tweets-widget.php';

?>