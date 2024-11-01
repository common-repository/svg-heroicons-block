<?php
/**
 * Plugin Name:       SVG Heroicons Block
 * Plugin URI:        https://github.com/mlaroy/heroicons-wp-block
 * Description:       A Gutenberg block for Heroicons, an open source set of SVG icons at https://heroicons.com.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0
 * Author:            Michael LaRoy
 * Author URI:        http://mikelaroy.ca/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       heroicons-block
 *
 * @package           heroicons-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function heroicon_heroicons_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'heroicon_heroicons_block_init' );
