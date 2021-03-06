<?php
/**
 * Bootstrap the plugin unit testing environment.
 *
 * Edit 'active_plugins' setting below to point to your main plugin file.
 *
 * @package wordpress-plugin-tests
 */

define('VPT_PLUGIN_PATH', dirname(dirname(__FILE__)));
define('VPT_PLUGIN_FOLDER', basename(VPT_PLUGIN_PATH));
define('VPT_PLUGIN_TO_TEST',  VPT_PLUGIN_FOLDER . '/virtualpages-with-templates.php');

// Activates this plugin in WordPress so it can be tested.
$GLOBALS['wp_tests_options'] = array(
	'active_plugins' => array( VPT_PLUGIN_TO_TEST ),
);

// If the develop repo location is defined (as WP_DEVELOP_DIR), use that
// location. Otherwise, we'll just assume that this plugin is installed in a
// WordPress develop SVN checkout.

if( false !== getenv( 'WP_DEVELOP_DIR' ) ) 
{
	require getenv( 'WP_DEVELOP_DIR' ) . '/tests/phpunit/includes/bootstrap.php';
} 
else 
{
	require '../../../../tests/phpunit/includes/bootstrap.php';
}