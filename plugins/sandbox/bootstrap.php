<?php
/**
 * OOP Sandbox Plugin
 *
 * @package     KnowTheCode\OOPSandbox
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: OOP Sandbox Plugin
 * Plugin URI:  https://KnowTheCode.io
 * Description: OOP Sandbox test plugin
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://KnowTheCode.io
 * Text Domain: journals
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace AntalTettinger\OOPSandbox;
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

function autoload() {
     include(__DIR__ . '/src/class-user.php');
}

function launch() {
    autoload();

    $config = array(
        array(
            'user_id' => 1,
            'first_name' => 'Antal',
            'last_name' => 'Tettinger',
            'email' => 'antal.tettinger@gmail.com',
            'twitter' => @tettinger,
            'facebook' => '',
        ),
        array(
            'user_id' => 2,
            'first_name' => 'John',
            'last_name' => 'Wilson',
            'email' => 'jwilson@gmail.com',
            'twitter' => @jwilson,
            'facebook' => '',
        )
    );

    $users = array();
    foreach($config as $user_config) {
    $user = new User( $user_config );
        
    $user->user_id     = $user_config['user_id'];
    $user->first_name     = $user_config['first_name'];

    $users[] = $user;
    }

}
add_filter('genesis_attr_site-header', __NAMESPACE__ . '\change_site_header_attributes');

function change_site_header_attributes( $attributes ){

    dump( $attributes );

    return $attributes;
}

launch();