<?php
/**
 * Enqueue All Assets
 * @package Simplecharm_Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;
use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;
class Assets{
    use Singleton;
    
	public function __construct()
	{
		$this->setup_hook();
	}
	public function setup_hook(){
		// enqueue scripts
		add_action("wp_enqueue_scripts",[$this,'enqueue_scripts']);
		// enqueue styles
		add_action("wp_enqueue_scripts",[$this,'enqueue_styles']);
	}
	public function enqueue_scripts(){
		// register scripts
		wp_register_script('SIMPLECHARM_PORTFOLIO_tailwindcss', 'http://cdn.tailwindcss.com', [], false, true);


		// enqueue scripts
		wp_enqueue_script('SIMPLECHARM_PORTFOLIO_tailwindcss');
		wp_enqueue_script("SIMPLECHARM_PORTFOLIO_flowbite");
	}
	public function enqueue_styles(){
		// register styles
		wp_register_style('SIMPLECHARM_PORTFOLIO_main', get_stylesheet_uri(), ['SIMPLECHARM_PORTFOLIO_fontawesome','SIMPLECHARM_PORTFOLIO_tailwindcss'], filemtime(SIMPLECHARM_PORTFOLIO_DIR_PATH.'/style.css'),'all');
		wp_register_style("SIMPLECHARM_PORTFOLIO_inter",SIMPLECHARM_PORTFOLIO_DIR_URI.'/assets/src/fonts/fonts.css',[],filemtime(SIMPLECHARM_PORTFOLIO_DIR_PATH.'/assets/src/fonts/fonts.css'));
		wp_enqueue_style("SIMPLECHARM_PORTFOLIO_dausyUI","https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css",[],false,'all');
		wp_enqueue_style("SIMPLECHARM_PORTFOLIO_fontawesome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css",[],false,'all');

		// enqueue styles
		wp_enqueue_style('SIMPLECHARM_PORTFOLIO_main');
		wp_enqueue_style('SIMPLECHARM_PORTFOLIO_inter');
		wp_enqueue_style('SIMPLECHARM_PORTFOLIO_dausyUI');
		wp_enqueue_style("SIMPLECHARM_PORTFOLIO_fontawesome");
	}
	
}