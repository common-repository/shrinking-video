<?php
/*
Plugin Name: Shrinking Videos
Plugin URI: https://wordpress.org/plugins/shrinking-video/
Description: Easily choose a video to be displayed on the top right of the window once it is scrolled past.
Version: 1.1.1
Author: Blake Long
Author URI: http://www.digital-scripts.com/
License: GPLv2 or later
*/

/*
Copyright 2016 Blake Long (email: staff@digital-scripts.com)

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

define( 'SHRINKINGVIDEO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SHRINKINGVIDEO_PLUGIN_VERSION', '1.1.1' );
define( 'SHRINKINGVIDEO_MIN_WP_VERSION', '4.6.1' );

register_activation_hook( __FILE__, array( 'shrinking_video', 'shrinking_video_activation' ) );
register_deactivation_hook( __FILE__, array( 'shrinking_video', 'shrinking_video_deactivation' ) );

add_action( 'init', array( 'shrinking_video', 'shrinking_video_init' ) );

include_once( SHRINKINGVIDEO_PLUGIN_DIR . 'class.shrinkingvideo.php' );