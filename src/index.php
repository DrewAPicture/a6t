<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

// Load the WordPress library.
require_once( dirname(__FILE__) . '/wp-load.php' );

// Set up the WordPress query.
wp();

// Load the theme template.
require_once( ABSPATH . WPINC . '/template-loader.php' );
