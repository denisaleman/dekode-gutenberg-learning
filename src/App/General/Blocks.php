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
 * Class Blocks
 *
 * @package DekodeGutenbergBlocks\App\General
 * @since 1.0.0
 */
class Blocks extends Base {

	/**
	 * Initialize the class.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		/**
		 * This is a general class and is being instantiated all the time in the Bootstrap class
		 *
		 * @see Bootstrap::__construct
		 *
		 * Add plugin code here
		 */
		add_action( 'init', [ $this, 'registerBlocks' ] );
	}

	/**
	 * Register blocks from metadata stored in block.json file
	 *
	 * @since 1.0.0
	 */
	public function registerBlocks() {
		foreach (
			[
				[
					'id'              => 'hello-world',
					'metadata_path'   => $this->plugin->blocksPath() . '/' . 'hello-world',
				],
				[
					'id'              => 'register-block',
					'metadata_path'   => $this->plugin->blocksPath() . '/' . 'red-block',
				],
			] as $block ) {

			register_block_type( $block['metadata_path'] );
		}
	}
}
