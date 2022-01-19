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

namespace DekodeGutenbergBlocks\App\Backend;

use DekodeGutenbergBlocks\Common\Abstracts\Base;

/**
 * Class Notices
 *
 * @package DekodeGutenbergBlocks\App\Backend
 * @since 1.0.0
 */
class Notices extends Base {

	/**
	 * Initialize the class.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		/**
		 * This backend class is only being instantiated in the backend as requested in the Bootstrap class
		 *
		 * @see Requester::isAdminBackend()
		 * @see Bootstrap::__construct
		 *
		 * Add plugin code here for admin notices specific functions
		 */
		add_action( 'admin_notices', [ $this, 'exampleAdminNotice' ] );
	}

	/**
	 * Example admin notice
	 *
	 * @since 1.0.0
	 */
	public function exampleAdminNotice() {
		global $pagenow;
		if ( $pagenow === 'options-general.php' ) {
			echo '<div class="notice notice-warning is-dismissible">
             <p>' . __( 'This is an example of a notice that appears on the settings page.', 'dekode-gutenberg-blocks' ) . '</p>
         </div>';
		}
	}
}
