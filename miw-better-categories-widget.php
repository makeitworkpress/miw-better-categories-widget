<?php
/**
 * Better Categories Widget
 *
 * Plugin Name: Better Categories Widget
 * Plugin URI:  https://github.com/makeitworkpress/wp-categories-widget
 * Description: Provides better controls over displaying categories in the categories widget for post archives.
 * Version:     1.0
 * Author:      Make it WorkPress
 * Author URI:  https://makeitwork.press
 * License:     GPLv3 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-3.0.html
 * Text Domain: wp-categories-widget
 * Domain Path: /languages
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 3, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
require_once( dirname(__FILE__) . '/classes/class-miw-categories-widget.php');

add_action( 'widgets_init', function() {
	register_widget( 'MIW_WP_Categories_Widget' );
});