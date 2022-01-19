<?php
/**
 * Dekode Gutenberg Blocks
 *
 * @package   dekode-gutenberg-blocks
 * @author    Denis Fedorov <barmaglot7@gmail.com>
 * @copyright 2022
 * @license   MIT
 * @link      https://www.upwork.com/freelancers/~01ad0e773956a34ffd
 *
 * Plugin Name:     Dekode Gutenberg Blocks
 * Plugin URI:      dekode.no
 * Description:     Just a few Gutenberg Blocks cooked with React for sake of learning.
 * Version:         1.0.0
 * Author:          Denis Fedorov
 * Author URI:      https://www.upwork.com/freelancers/~01ad0e773956a34ffd
 * Text Domain:     dekode-gutenberg-blocks
 * Domain Path:     /languages
 * Requires PHP:    7.1
 * Requires WP:     5.5.0
 * Namespace:       DekodeGutenbergBlocks
 */

declare( strict_types = 1 );

/**
 * Define the default root file of the plugin
 *
 * @since 1.0.0
 */
const DEKODE_GUTENBERG_BLOCKS_PLUGIN_FILE = __FILE__;

/**
 * Load PSR4 autoloader
 *
 * @since 1.0.0
 */
$dekode_gutenberg_blocks_autoloader = require plugin_dir_path( DEKODE_GUTENBERG_BLOCKS_PLUGIN_FILE ) . 'vendor/autoload.php';

/**
 * Setup hooks (activation, deactivation, uninstall)
 *
 * @since 1.0.0
 */
register_activation_hook( __FILE__, [ 'DekodeGutenbergBlocks\Config\Setup', 'activation' ] );
register_deactivation_hook( __FILE__, [ 'DekodeGutenbergBlocks\Config\Setup', 'deactivation' ] );
register_uninstall_hook( __FILE__, [ 'DekodeGutenbergBlocks\Config\Setup', 'uninstall' ] );

/**
 * Bootstrap the plugin
 *
 * @since 1.0.0
 */
if ( ! class_exists( '\DekodeGutenbergBlocks\Bootstrap' ) ) {
	wp_die( __( 'Dekode Gutenberg Blocks is unable to find the Bootstrap class.', 'dekode-gutenberg-blocks' ) );
}
add_action(
	'plugins_loaded',
	static function () use ( $dekode_gutenberg_blocks_autoloader ) {
		/**
		 * @see \DekodeGutenbergBlocks\Bootstrap
		 */
		try {
			new \DekodeGutenbergBlocks\Bootstrap( $dekode_gutenberg_blocks_autoloader );
		} catch ( Exception $e ) {
			wp_die( __( 'Dekode Gutenberg Blocks is unable to run the Bootstrap class.', 'dekode-gutenberg-blocks' ) );
		}
	}
);

/**
 * Create a main function for external uses
 *
 * @return \DekodeGutenbergBlocks\Common\Functions
 * @since 1.0.0
 */
function dekode_gutenberg_blocks(): \DekodeGutenbergBlocks\Common\Functions {
	return new \DekodeGutenbergBlocks\Common\Functions();
}
