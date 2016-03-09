<?php
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script("bootstrap");

	// videoblesk script vb.js:
	wp_register_script( 'vb', get_template_directory_uri() . '/bootstrap/js/vb.js', array( 'jquery' ) );
	wp_enqueue_script("vb");
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

?>
