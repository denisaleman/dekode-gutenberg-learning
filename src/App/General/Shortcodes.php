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
 * Class Shortcodes
 *
 * @package DekodeGutenbergBlocks\App\General
 * @since 1.0.0
 */
class Shortcodes extends Base {
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
		 * Add plugin code here
		 */

		add_shortcode( 'foobar', [ $this, 'foobarFunc' ] );
	}

	/**
	 * Shortcode example
	 *
	 * @param array $atts Parameters.
	 * @return string
	 * @since 1.0.0
	 */
	public function foobarFunc( array $atts ): string {
		shortcode_atts(
			[
				'foo' => 'something',
				'bar' => 'something else',
			], $atts
		);
		return '<span class="foo">foo = ' . $atts['foo'] . '</span>' .
			'<span class="bar">foo = ' . $atts['bar'] . '</span>';
	}
}
