<?php
/*
Plugin Name: WooCommerce Template Hints
Plugin URI: https://github.com/growdev/woocommerce-template-hints/
Description: WooCommerce Template Hints adds a visual border around parts of all WooCommerce pages showing details about the template used.
Version: 1.0.0
Author: Shop Plugins
Author URI: http://shopplugins.com
Text Domain: woocommerce-template-hints

 * Copyright Shop Plugins
 *
 *     This file is part of WooCommerce Availability Chart,
 *     a plugin for WordPress.
 *
 *     WooCommerce Template Hints is free software:
 *     You can redistribute it and/or modify it under the terms of the
 *     GNU General Public License as published by the Free Software
 *     Foundation, either version 3 of the License, or (at your option)
 *     any later version.
 *
 *     WooCommerce Template Hints is distributed in the hope that
 *     it will be useful, but WITHOUT ANY WARRANTY; without even the
 *     implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 *     PURPOSE. See the GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with WordPress. If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


// TODO add overview class

// TODO add WC check and notice

// TODO add settings to WC > System Status > Tab

// TODO Add color for native template, color for override

// TODO Add info bar for path to template



add_action('woocommerce_before_template_part', 'wcth_before_template',30, 4);
function wcth_before_template( $template_name, $template_path, $located, $args ) {

	echo '<fieldset style="border: 1px red solid; padding: 3px; ">';
    echo "<legend style='padding: 1px; background: red; color: white; font-size: 10px;'>template: " . $template_name . " </legend>";
}

add_action('woocommerce_after_template_part', 'wcth_after_template',30, 4);
function wcth_after_template( $template_name, $template_path, $located, $args ) {
	echo "</fieldset>";
}

