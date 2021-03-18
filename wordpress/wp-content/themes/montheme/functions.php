<?php 

function montheme_scripts() {
wp_enqueue_style( 'montheme-style', get_template_directory_uri() . '/style.css', array(),'1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'montheme_scripts' );
