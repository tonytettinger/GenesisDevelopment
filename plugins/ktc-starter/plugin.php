<?php

/**
 * Starter WordPress Plugin
 *
 * @package     PluginPackage
 * @author      Antal Tettinger
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Starter WordPress Plugin
 * Plugin URI:  https://example.com/plugin-name
 * Description: Startup plugin based on Know the Code lab.
 * Version:     1.0.0
 * Author:      Antal Tettinger
 * Author URI:  https://antaltettinger.com
 * Text Domain: ktc-starter
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace AntalTettinger;

if ( ! defined( 'ABSPATH') ) {
    exit('Not run from WP core');
}

require_once(__DIR__ . '/assets/vendor/autoload.php');

add_action( 'init', __NAMESPACE__ . '\launch' );

function launch() {


}