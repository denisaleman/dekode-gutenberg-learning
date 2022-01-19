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

namespace DekodeGutenbergBlocks\Common;

use DekodeGutenbergBlocks\App\Frontend\Templates;
use DekodeGutenbergBlocks\Common\Abstracts\Base;

/**
 * Main function class for external uses
 *
 * @see dekode_gutenberg_blocks()
 * @package DekodeGutenbergBlocks\Common
 */
class Functions extends Base {
	/**
	 * Get plugin data by using dekode_gutenberg_blocks()->getData()
	 *
	 * @return array
	 * @since 1.0.0
	 */
	public function getData(): array {
		return $this->plugin->data();
	}

	/**
	 * Get the template instantiated class using dekode_gutenberg_blocks()->templates()
	 *
	 * @return Templates
	 * @since 1.0.0
	 */
	public function templates(): Templates {
		return new Templates();
	}
}
