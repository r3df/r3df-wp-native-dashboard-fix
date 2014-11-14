<?php
/*
Plugin Name: 	R3DF - WP Native Dashboard Fix
Description:    Move the admin menu item for WP Native Dashboard Menu
Plugin URI:		http://r3df.com/
Version: 		1.0.0
Text Domain:	r3df-wp-native-dashboard-fix
Author:         R3DF
Author URI:     http://r3df.com
Author email:   plugin-support@r3df.com
Copyright: 		R-Cubed Design Forge
*/

/*  Copyright 2012-2014  R-Cubed Design Forge

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// **** Do only in admin ****//	
if ( is_admin() ) {
	// act on admin bar menu
	add_action( 'admin_bar_menu', 'r3df_move_wpnd_node', 10001);
}

function r3df_move_wpnd_node( $wp_admin_bar ) {
	// get the menu item (node)
	$wpnd_node = $wp_admin_bar->get_node('wpnd-lang-cur');
	
	// check if the node exists (make sure it was there)
	if( $wpnd_node ) {
		// remove it
		$wp_admin_bar->remove_node( 'wpnd-lang-cur' );
		// add it back to the end
		$wp_admin_bar->add_node( $wpnd_node );
	}
}
