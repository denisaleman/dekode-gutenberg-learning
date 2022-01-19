<?php
/**
 * Dekode Gutenberg Blocks
 *
 * @package   dekode-gutenberg-blocks
 * @author    Denis Fedorov <barmaglot7@gmail.com>
 * @copyright 2022
 * @license   MIT
 * @link      https://www.upwork.com/freelancers/~01ad0e773956a34ffd
 */

declare( strict_types = 1 );

namespace DekodeGutenbergBlocks\App\General;

use DekodeGutenbergBlocks\Common\Abstracts\Base;

/**
 * Class Widgets
 *
 * @package DekodeGutenbergBlocks\App\General
 * @since 1.0.0
 */
class Widgets extends Base {

	/**
	 * Initialize the class.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		/**
		 * This general class is always being instantiated as requested in the Bootstrap class
		 *
		 * @see Bootstrap::__construct
		 *
		 * Widget is registered from the Integrations folder, but it can also be registered
		 * from the integration class file self
		 * @see HTML_Widget::init()
		 */
		add_action( 'widgets_init', function () {
			register_widget( $this->plugin->namespace() . '\Integrations\Widget\HTML_Widget' );
		} );
	}
}

