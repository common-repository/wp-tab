<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 * Plugin Name: WP Tab
 * Description: Tab plugin for wordpress
 * Plugin URI: http://plugin.rayhan.info/
 * Author: Rayhan
 * Author URI: https://www.facebook.com/rayhan095
 * Version: 1.0.1
 * License: GPL2
 *
 */

/**
 * Copyright (c) 2015 | rayhan095@gmail.com | All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */
	
include_once dirname( __FILE__ ) .'/wp-tab-shortcode.php';
require_once dirname( __FILE__ ) .'/assets/admin/cs-framework.php';
function cs_modify_enqueue_script() {
	wp_enqueue_script( 'cs-single-shortcode',  plugin_dir_url(__FILE__) .'assets/cf-single-shortcode.js',  array( 'cs-framework' ), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'cs_modify_enqueue_script' );
// Support shortcode in Text Widget
add_filter('widget_text', 'do_shortcode');

  /**----------------------------------------------------------------------------------
   *
   *  Include Plugin files
   * 
   *-----------------------------------------------------------------------------------*/

    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function wp_tab_scripts() {
		// -----
		wp_enqueue_style( 'wp-tab-fontAwesome', plugin_dir_url(__FILE__).'assets/fontAwesome/css/font-awesome.min.css', '', '4.5.0', 'all' );
		// -----
		wp_enqueue_style( 'wp-tab-liquid', plugin_dir_url(__FILE__).'assets/liquid-slider.css', '', '1.0', 'all' );
		// -----
		wp_enqueue_style( 'wp-tab-animate', plugin_dir_url(__FILE__).'assets/animate.min.css', '', '1.0', 'all' );
		// Include Jquery support
		wp_enqueue_script( 'jquery');
		// ---
		wp_enqueue_script( 'wp-tab-easing-js',plugin_dir_url(__FILE__).'assets/jquery.easing.min.js', array( 'jquery' ), '1.0', false);
		// ---
		wp_enqueue_script( 'wp-tab-touchSwipe-js',plugin_dir_url(__FILE__).'assets/jquery.touchSwipe.min.js', array( 'jquery' ), '1.0', false);
		// ---
		wp_enqueue_script( 'wp-tab-liquid-slider-js',plugin_dir_url(__FILE__).'assets/jquery.liquid-slider.min.js', array( 'jquery' ), '1.0', false);
	}

	add_action( 'wp_enqueue_scripts', 'wp_tab_scripts' );
	
