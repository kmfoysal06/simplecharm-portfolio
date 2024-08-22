<?php
/**
 * Register Menus For Theme
 * @package SimpleCharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;
class Menus{
    use Singleton;

    public function __construct(){ 
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /**
         * Actions.
         */
        add_action("init",[$this,"register_menus"]);
    }
    public function register_menus(){
        register_nav_menus([
            'simplecharm_portfolio_header_menu' => esc_html__("Header Menu","simplecharm-portfolio"),
        ]);
    }

}
