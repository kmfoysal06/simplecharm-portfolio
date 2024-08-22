<?php
/**
 * Custom template tags for this theme.
 * @package SimpleCharm Portfolio
 * @since 1.0
 */

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// is the charming portfolio activated or not
if(!function_exists('simplecharm_portfolio_admin_notices')){
	function simplecharm_portfolio_admin_notices(){
		if(!class_exists('\CHARMING_PORTFOLIO\Inc\Classes\Portfolio')){
			if(function_exists('simplecharm_portfolio_notice_plugin_install')){
		    	add_action( 'admin_notices', 'simplecharm_portfolio_notice_plugin_install' );
			}
		}
	}
}
if(!function_exists('simplecharm_portfolio_notice_plugin_install')){
	function simplecharm_portfolio_notice_plugin_install(){
    	printf(
			__('<div class="notice notice-warning is-dismissible">
				<p>This Theme Requires <a href="%s">Charming Portfolio</a> To Be installed</p>
			</div>','simplecharm-portfolio'),
			esc_url("http://w.org/plugins/charming-portfolio")
    	);
	}
}