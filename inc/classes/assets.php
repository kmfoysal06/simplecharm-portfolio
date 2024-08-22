<?php
/**
 * Enqueue All Assets
 * @package Simplecharm_Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    public function __construct()
    {
        $this->setup_hook();
    }
    public function setup_hook()
    {
        // enqueue scripts
        add_action("wp_enqueue_scripts", [$this, 'enqueue_scripts']);
        // enqueue styles
        add_action("wp_enqueue_scripts", [$this, 'enqueue_styles']);

        // dequeue_styles
        // add_action("wp_enqueue_scripts",[$this,"dequeue_styles"]);

        // editor assets
        add_action( "enqueue_block_assets",[ $this, "enqueue_editor_assets" ]);
    }
    public function enqueue_scripts()
    {
        // register scripts
        wp_register_script("SIMPLECHARM_PORTFOLIO_main", SIMPLECHARM_PORTFOLIO_DIR_URI . '/assets/build/js/main.js', ['jquery'], filemtime(SIMPLECHARM_PORTFOLIO_DIR_PATH . '/assets/build/js/main.js'), true);

        // enqueue scripts
        wp_enqueue_script('SIMPLECHARM_PORTFOLIO_main');
    }
    public function enqueue_styles()
    {
        // register styles
        wp_register_style('SIMPLECHARM_PORTFOLIO_main', get_stylesheet_uri(), ['SIMPLECHARM_PORTFOLIO_tailwindcss'], filemtime(SIMPLECHARM_PORTFOLIO_DIR_PATH . '/style.css'), 'all');
        wp_register_style('SIMPLECHARM_PORTFOLIO_tailwindcss', SIMPLECHARM_PORTFOLIO_DIR_URI . '/assets/build/css/main.css', [], filemtime(SIMPLECHARM_PORTFOLIO_DIR_PATH . '/assets/build/css/main.css'), 'all');

        // enqueue styles
        wp_enqueue_style('SIMPLECHARM_PORTFOLIO_main');
        wp_enqueue_style('SIMPLECHARM_PORTFOLIO_tailwindcss');
    }
    public function dequeue_styles(){
        wp_dequeue_style("wp-block-library");
        wp_dequeue_style("wp-block-library-theme");
        // wp_dequeue_style( "wp-block-library-css" );
        wp_dequeue_style("wp-block-style"); //remove woocommerce block css
    }
    public function enqueue_editor_assets(){
        if(is_admin()){
         wp_enqueue_script( 
        "simplecharm_portfolio-editor",  
        SIMPLECHARM_PORTFOLIO_DIR_URI.'/assets/build/js/editor.js', 
        ['jquery'], 
        filemtime(SIMPLECHARM_PORTFOLIO_DIR_PATH.'/assets/build/js/editor.js', ),
        true );

        }

        $css_dependencies = [
            'wp-block-library-theme',
            'wp-block-library'
        ];
        
        wp_enqueue_style( 
        "simplecharm_portfolio-editor-css", 
        SIMPLECHARM_PORTFOLIO_DIR_URI.'/assets/build/css/editor.css', 
        $css_dependencies, 
        filemtime(SIMPLECHARM_PORTFOLIO_DIR_PATH.'/assets/build/css/editor.css'), 
        'all' );

    }

}
