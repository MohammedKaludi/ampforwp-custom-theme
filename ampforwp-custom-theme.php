<?php
/*
Plugin Name: AMP Custom Theme
Plugin URI: https://wordpress.org/plugins/accelerated-mobile-pages/
Description: Custom Theme made for AMP for WP.
Version: 1.0
Author:  Mohammed Kaludi
Author URI: http://ampforwp.com/ 
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

define('AMPFORWP_CUSTOM_THEME', plugin_dir_path( __FILE__ )); 

// Remove old files
add_action('init','ampforwp_custom_theme_remove_old_files',11);
function ampforwp_custom_theme_remove_old_files(){
    remove_action('pre_amp_render_post','ampforwp_stylesheet_file_insertion', 12 );
	remove_filter( 'amp_post_template_file', 'ampforwp_custom_header', 10, 3 );
	if ( is_single() ) {
		remove_filter( 'amp_post_template_file', 'ampforwp_custom_template', 10, 3 );
	}
	add_action('amp_post_template_head', function() {
		remove_action( 'amp_post_template_head', 'amp_post_template_add_fonts');
	}, 9);
}

// Register New files
add_action('init','ampforwp_custom_theme_files_register', 10);

function ampforwp_custom_theme_files_register(){
	add_filter( 'amp_post_template_file', 'ampforwp_custom_header_file', 10, 2 );
	add_filter( 'amp_post_template_file', 'ampforwp_designing_custom_template', 10, 3 );
	add_filter( 'amp_post_template_file', 'ampforwp_custom_footer_file', 10, 2 );
}

function ampforwp_custom_header_file( $file, $type ) { 

	if ( 'header-bar' === $type ) {
		$file = AMPFORWP_CUSTOM_THEME . '/template/header-bar.php';
	}

	return $file;
}
function ampforwp_designing_custom_template( $file, $type, $post ) { 

	// Custom Single file
    if ( is_single() || is_page() ) {
		if('single' === $type && !('product' === $post->post_type )) {
			$file = AMPFORWP_CUSTOM_THEME . '/template/single.php';
	 	}
	}
	if ( is_home() ) {
        if ( 'single' === $type ) {
            $file = AMPFORWP_CUSTOM_THEME . '/template/index.php';
        }
    }

	return $file;
}

function ampforwp_custom_footer_file($file, $type ){
	if ( 'footer' === $type ) {
		$file = AMPFORWP_CUSTOM_THEME . '/template/footer.php';
	}
	return $file;
}


add_action( 'amp_post_template_head', 'amp_post_template_add_custom_google_font');

function amp_post_template_add_custom_google_font( $amp_template ) {
	$font_urls = $amp_template->get( 'font_urls', array() );
	$font_urls['source_serif_pro'] = 'https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600|Source+Sans+Pro:400,700';  
	?>
		<link rel="stylesheet" href="<?php echo esc_url( $font_urls['source_serif_pro'] ); ?>">
	<?php 

}

require_once( AMPFORWP_CUSTOM_THEME . '/template/style.php' );

	// Add Scripts only when AMP Menu is Enabled
	if( has_nav_menu( 'amp-menu' ) ) {
		if ( empty( $data['amp_component_scripts']['amp-accordion'] ) ) {
			$data['amp_component_scripts']['amp-accordion'] = 'https://cdn.ampproject.org/v0/amp-accordion-0.1.js';
		}
	}
