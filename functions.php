<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function mon_31w_setup() {
	add_theme_support( 'title-tag' );

} 
add_action( 'after_setup_theme', 'mon_31w_setup' );
?>