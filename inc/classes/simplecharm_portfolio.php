<?php
/**
 * Main Class
 * @package Simplecharm_Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;
class Simplecharm_Portfolio{
    use Singleton;
    
	public function __construct()
	{
		$this->setup_hook();
        Assets::get_instance();
        Menus::get_instance();
        Block_Patterns::get_instance();
        Block_Styles::get_instance();
        Meta_Boxes::get_instance();
	}
	public function setup_hook(){
		//all action and hook registration here
		add_action('after_setup_theme',[$this,'setup_supports']);
	}
		    public function setup_supports(){
        add_theme_support( "title-tag" );
        add_theme_support("custom-logo",[
            "height" => 10,
            "width" => 50,
            "flex-height" => true,
            "flex-width" => true
        ]);
        add_theme_support("post-thumbnails");
        add_image_size( "simplecharm-portfolio-featured-thumbnail", 350, 233, true );
        add_theme_support("customize-selective-refresh-widgets");
        add_theme_support("automatic-feed-links");
        add_theme_support("html5",[
            "search-form",
            "comment-form",
            "comment-list",
            "gallery",
            "caption",
            "script",
            "style"
        ]);
        add_theme_support("wp-block-styles");
        add_theme_support("align-wide");

        //remove core block pattern
        remove_theme_support( "core-block-patterns" );
    }
}