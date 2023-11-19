<?php
/*
Plugin Name: CI Standard form calculator
Plugin URI: https://www.calculator.io/standard-form-calculator/
Description: Standard form calculator converts any number to standard form or scientific notation. It accepts number notation, e-notation, and scientific notation.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_standard_form_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Standard Form Calculator by Calculator.iO";

function display_ci_standard_form_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Standard Form Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_standard_form_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_standard_form_calculator', 'display_ci_standard_form_calculator' );