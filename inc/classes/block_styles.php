<?php
/**
 * Block Styles
 * @package SimpleCharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;

class Block_Styles{
    use Singleton;
    public function __construct() {
        /**
         * Actions
         */
		$this->setup_hooks();
	}
    public function setup_hooks(){
    	$this->skills_button();
    	$this->experience_card();
    	$this->project_card();
    	$this->badge();
    	$this->footer();
    }
    public function skills_button() {
	    
	    register_block_style(
	        'core/column', // The block to which the style applies.
	        array(
	            'name'         => 'simplecharm_portfolio-skill-button',
	            'label'        => __( 'Skills', 'simplecharm-portfolio' ),
	            'style_handle' => 'simplecharm_portfolio-editor',
	        )
	    );
	}
	public function experience_card() {
	    
	    register_block_style(
	        'core/columns',
	        array(
	            'name'         => 'simplecharm_portfolio-experience-card',
	            'label'        => __( 'Experience', 'simplecharm-portfolio' ),
	            'style_handle' => 'simplecharm_portfolio-editor',
	        )
	    );
	}
	public function project_card() {
	    
	    register_block_style(
	        'core/column',
	        array(
	            'name'         => 'simplecharm_portfolio-project-card',
	            'label'        => __( 'Project Card', 'simplecharm-portfolio' ),
	            'style_handle' => 'simplecharm_portfolio-editor',
	        )
	    );
	}
	public function badge() {
	    
	    register_block_style(
	        'core/paragraph',
	        array(
	            'name'         => 'simplecharm_portfolio-badge',
	            'label'        => __( 'Badge', 'simplecharm-portfolio' ),
	            'style_handle' => 'simplecharm_portfolio-editor',
	        )
	    );
	}
	public function footer() {
	    
	    register_block_style(
	        'core/column', // The block to which the style applies.
	        array(
	            'name'         => 'simplecharm_portfolio-footer',
	            'label'        => __( 'Footer', 'simplecharm-portfolio' ),
	            'style_handle' => 'simplecharm_portfolio-editor',
	        )
	    );
	}
}