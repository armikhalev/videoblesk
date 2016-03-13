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


function mycustom_embed_defaults($embed_size){

    $embed_size['width'] = 720; // Adjust values to your needs
    $embed_size['height'] = 405;

    return $embed_size; // Return new size
}

add_filter('embed_defaults', 'mycustom_embed_defaults');

/*  Add responsive container to embeds
/* ------------------------------------ */
function alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}

add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'alx_embed_html' ); // Jetpack

?>
