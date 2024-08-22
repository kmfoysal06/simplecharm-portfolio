<?php
/**
 * Block Patterns
 * @package SimpleCharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;

class Block_Patterns{
    use Singleton;
    public function __construct() {
        /**
         * Actions
         */
		$this->setup_hooks();
	}
    public function setup_hooks(){
        add_action("init",[$this,"register_block_patterns"]);
        add_action("init",[$this,"register_block_pattern_category"]);
    }
    public function register_block_patterns(){
        if(function_exists("register_block_pattern")){
        /**
         * Basic Introduction Pattern
         */
            register_block_pattern("simplecharm_portfolio/intro",
        [
            'title' => __("Portfolio Introduction",'simplecharm-portfolio'),
            'description' => __("Pattern for basic introduction of you",'simplecharm-portfolio'),
            'categories' => ['simplecharm_portfolio'],
            'content' => $this->get_pattern_content("template-parts/patterns/intro")
        ]);

        /**
         * About Me Pattern
         */
        register_block_pattern("simplecharm_portfolio/aboutme",
        [
            'title' => __("Portfolio About Me",'simplecharm-portfolio'),
            'description' => __("Pattern For More Descriptive Introduction Than Basic Intro",'simplecharm-portfolio'),
            'categories' => ['simplecharm_portfolio'],
            'content' => $this->get_pattern_content("template-parts/patterns/aboutme")
        ]);

        /**
         * Skills Pattern
         */
        register_block_pattern("simplecharm_portfolio/skills",
        [
            'title' => __("Portfolio Skills",'simplecharm-portfolio'),
            'description' => __("Pattern For Skills List","simplecharm-portfolio"),
            'categories' => ['simplecharm_portfolio'],
            'content' => $this->get_pattern_content("template-parts/patterns/skills")
        ]);

        /**
         * Experience Pattern
         */
        register_block_pattern("simplecharm_portfolio/experience",
        [
            'title' => __("Portfolio Experience",'simplecharm-portfolio'),
            'description' => __("Pattern For Experience ShowCase Card","simplecharm-portfolio"),
            'categories' => ['simplecharm_portfolio'],
            'content' => $this->get_pattern_content("template-parts/patterns/experience")
        ]);

        /**
         * Project Card Pattern
         */
        register_block_pattern("simplecharm_portfolio/project_card",
        [
            'title' => __("Portfolio Project Card",'simplecharm-portfolio'),
            'description' => __("Pattern For Project ShowCase Card", "simplecharm-portfolio"),
            'categories' => ['simplecharm_portfolio'],
            'content' => $this->get_pattern_content("template-parts/patterns/project-card")
        ]);

        /**
         * Footer Pattern
         */
        register_block_pattern("simplecharm_portfolio/footer",
        [
            'title' => __("Portfolio Footer",'simplecharm-portfolio'),
            'description' => __("Pattern For Footer","simplecharm-portfolio"),
            'categories' => ['simplecharm_portfolio'],
            'content' => $this->get_pattern_content("template-parts/patterns/footer")
        ]);
        }
    }
    public function get_pattern_content($patter_path){
        ob_start();
        get_template_part($patter_path);
        $pattern_content = ob_get_contents();
        ob_end_clean();
        return $pattern_content;
    }
    public function register_block_pattern_category(){
        $pattern_categories = [
            'simplecharm_portfolio' => __("SimpleCharm Portfolio","simplecharm-portfolio"),
            // "button" => __("Button","simplecharm-portfolio")
        ];
        if(!empty($pattern_categories) && is_array($pattern_categories)){
            foreach($pattern_categories as $pattern_category => $pattern_category_label){
                register_block_pattern_category(
                 $pattern_category,
                [ 'label' => $pattern_category_label ]
                );
            }
        }
    }
}