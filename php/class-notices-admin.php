<?php
/**
 * Class Notices_Admin
 *
 * @package mkdo\ctas_for_binder
 */

namespace mkdo\ctas_for_binder;

/**
 * If the plugin needs attention, here is where the notices are set.
 *
 * You should place warnings such as plugin dependancies here.
 */
class Notices_Admin {

	/**
	 * Constructor
	 */
	function __construct() {}

	/**
	 * Do Work
	 */
	public function run() {
		// add_action( 'admin_notices', array( $this, 'admin_notices' ) );
	}

	/**
	 * Do Admin Notifications
	 */
	public function admin_notices() {

		// Example
		//
		if ( ! class_exists( 'mkdo\binder\Controller_Main' ) ) {
			$url     = 'https://github.com/mwtsn/binder';
			$warning = sprintf( __( 'The %1$sCTAs for Binder%2$s plugin works much better when you %3$sinstall and activate the Binder plugin%4$s.', 'ctas-for-binder' ), '<strong>', '</strong>', '<a href="' . $url . '" target="_blank">', '</a>' );
			?>
			<div class="notice notice-warning is-dismissible">
			<p>
			<?php
				echo wp_kses(
					$warning,
					array(
						'a' => array(
							'href'   => array(),
							'target' => array(),
						),
						'strong'   => array(),
						'em' => array(),
					)
				);
			?>
			</p>
			</div>
			<?php
		}
	}
}
