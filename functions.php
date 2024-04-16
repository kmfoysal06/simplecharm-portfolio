<?php
/**
 * All Functions Here
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if (!defined("SIMPLECHARMPORTFOLIO_DIR_PATH")) {
    define("SIMPLECHARM_PORTFOLIO_DIR_PATH", untrailingslashit(get_template_directory()));
}
if (!defined("SIMPLECHARMPORTFOLIO_DIR_URI")) {
    define("SIMPLECHARM_PORTFOLIO_DIR_URI", untrailingslashit(get_template_directory_uri()));
}
require_once SIMPLECHARM_PORTFOLIO_DIR_PATH.'/inc/helpers/autoload.php';
require_once SIMPLECHARM_PORTFOLIO_DIR_PATH.'/inc/helpers/template-tags.php';
function simplecharm_portfolio_get_instance(){
    return \SIMPLECHARM_PORTFOLIO\Inc\Classes\Simplecharm_Portfolio::get_instance();
}
simplecharm_portfolio_get_instance();