<?php
/**
 * CTAs for Binder
 *
 * @link              https://github.com/mkdo/ctas_for_binder
 * @package           mkdo\ctas_for_binder
 *
 * Plugin Name:       CTAs for Binder
 * Plugin URI:        https://github.com/mkdo/ctas_for_binder
 * Description:       Call to Actions (CTAs) for the Binder Document Management System (DMS) for WordPress.
 * Version:           0.1.0
 * Author:            Make Do <hello@makedo.net>
 * Author URI:        https://makedo.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ctas-for-binder
 * Domain Path:       /languages
 */

// Abort if this file is called directly.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Constants.
define( 'MKDO_CTAS_FOR_BINDER_ROOT', __FILE__ );
define( 'MKDO_CTAS_FOR_BINDER_NAME', 'CTAs for Binder' );
define( 'MKDO_CTAS_FOR_BINDER_PREFIX', 'mkdo_ctas_for_binder' );

// Classes.
require_once 'php/class-helper.php';
require_once 'php/class-controller-assets.php';
require_once 'php/class-controller-main.php';
require_once 'php/class-notices-admin.php';
require_once 'php/class-shortcode-binder-document.php';

// Namespaces.
use mkdo\ctas_for_binder\Helper;
use mkdo\ctas_for_binder\Controller_Assets;
use mkdo\ctas_for_binder\Controller_Main;
use mkdo\ctas_for_binder\Notices_Admin;
use mkdo\ctas_for_binder\Shortcode_Binder_Document;

// Instances.
$controller_assets  	  = new Controller_Assets();
$notices_admin  	      = new Notices_Admin();
$shorcode_binder_document = new Shortcode_Binder_Document();
$controller_main          = new Controller_Main(
	$controller_assets,
	$notices_admin,
	$shorcode_binder_document
);

// Go.
$controller_main->run();
