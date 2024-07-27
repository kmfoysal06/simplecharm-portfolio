<?php
/**
 * Block Styles
 * @package SimpleCharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;
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
    }
    public function skills_button() {
	    
	    register_block_style(
	        'core/column', // The block to which the style applies.
	        array(
	            'name'         => 'simplecharm_portfolio-skill-button',
	            'label'        => __( 'Skill Button', 'simplecharm-portfolio' ),
	            'style_handle' => 'simplecharm_portfolio-editor',
	        )
	    );
	}
}