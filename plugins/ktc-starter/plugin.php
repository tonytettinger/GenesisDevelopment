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

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require_once(__DIR__ . '/assets/vendor/autoload.php');

$whoops = new Run();
$error_page = new PrettyPageHandler();
$error_page->setEditor('sublime');
$whoops->pushHandler( $error_page );
$whoops->register();