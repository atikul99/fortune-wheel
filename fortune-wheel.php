<?php

/*
 * Plugin Name:       Fortune Wheel
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Atikul Islam
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/fortune-wheel/
 * Text Domain:       fortune-wheel
 * Domain Path:       /languages
 */


define( 'FORTUNE_WHEEL_VERSION', '1.0.0' );

define( 'FORTUNE_WHEEL_PLUGIN_URL', plugin_dir_url(__FILE__) );

/**
 * Initialize main class
 *
 * @author Atikul Islam
 * @version 1.0.0
 */

require plugin_dir_path( __FILE__ ) . 'includes/fortune-wheel-class.php';

$plugin = new fortuneWheel();

