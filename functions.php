<?php
/**
 * Graphene WordPress Theme, Copyright 2010-2012 Syahir Hakim
 * Graphene is distributed under the terms of the GNU GPL version 3
 *
 * Graphene functions and definitions
 *
 * @package Graphene
 * @since Graphene 1.0
 */
 
 
/**
 * Before we do anything, let's get the mobile extension's init file if it exists
*/
$mobile_path = dirname( dirname( __FILE__ ) ) . '/graphene-mobile/includes/theme-plugin.php';
if ( file_exists( $mobile_path ) ) { include( $mobile_path ); }


/**
 * Load the various theme files
*/
require( 'admin/options-init.php' );		// Theme options and admin interface setup
require( 'includes/theme-scripts.php' );	// Theme stylesheets and scripts
require( 'includes/theme-utils.php' );		// Theme utilities
require( 'includes/theme-head.php' );		// Functions for output into the HTML <head> element
require( 'includes/theme-menu.php' );		// Functions for navigation menus
require( 'includes/theme-loop.php' );		// Functions for posts/pages loops
require( 'includes/theme-comments.php' );	// Functions for comments
require( 'includes/theme-widgets.php' );	// Functions for custom widgets
require( 'includes/theme-slider.php' );		// Functions for the slider
require( 'includes/theme-panes.php' );		// Functions for the homepage panes
require( 'includes/theme-plugins.php' );	// Native plugins support
require( 'includes/theme-shortcodes.php' );	// Theme shortcodes
require( 'includes/theme-webfonts.php' );	// Theme webfonts
require( 'includes/theme-functions.php' );	// Other functions that are not categorised above
require( 'includes/theme-setup.php' );		// Theme setup
?>