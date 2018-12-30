<?php

// wp admin top left corner wp logo remove
add_action( 'wp_before_admin_bar_render', function() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
}, 7 );


// wp admin bottom left version remove.
function my_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}

add_action( 'admin_menu', 'my_footer_shh' );


// wp admin screen bottom left text change
function oz_alter_wp_admin_bottom_left_text( $text ) {
    return sprintf( __( '<h1>If you need any help contact me by skype: <b>niladri1510</b></h1>' ), '#' );
}
add_filter( 'admin_footer_text', 'oz_alter_wp_admin_bottom_left_text' );


// wp admin top tool bar menu add.
add_action( 'admin_bar_menu', 'Toolbar_link_to_mypage', 999 );
function Toolbar_link_to_mypage( $wp_admin_bar ) {
$args = array(
'id' => 'wplift',
'title' => 'You need any help? Click me.',
'href' => 'https://wpsel.com',
'meta' => array( 'class' => 'my-wplift-page' )
);
$wp_admin_bar->add_node( $args );
}