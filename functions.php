<?php
/**
 * All Functions Here
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if (!defined("SIMPLECHARM_PORTFOLIO_DIR_PATH")) {
    define("SIMPLECHARM_PORTFOLIO_DIR_PATH", untrailingslashit(get_template_directory()));
}
if (!defined("SIMPLECHARM_PORTFOLIO_DIR_URI")) {
    define("SIMPLECHARM_PORTFOLIO_DIR_URI", untrailingslashit(get_template_directory_uri()));
}
require_once SIMPLECHARM_PORTFOLIO_DIR_PATH.'/inc/helpers/autoload.php';
require_once SIMPLECHARM_PORTFOLIO_DIR_PATH.'/inc/helpers/template-tags.php';
function simplecharm_portfolio_get_instance(){
    return \SIMPLECHARM_PORTFOLIO\Inc\Classes\Simplecharm_Portfolio::get_instance();
}
if(function_exists('simplecharm_portfolio_admin_notices')){
    simplecharm_portfolio_admin_notices();
}
simplecharm_portfolio_get_instance();