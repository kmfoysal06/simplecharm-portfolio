<?php
/**
 * Block Patterns
 * @package Simplecharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;
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
        /**
         * Cover Pattern
         */
        if(function_exists("register_block_pattern")){
            register_block_pattern("aquila/cover",
        [
            'title' => __("Aquila Cover",'aquila'),
            'description' => __("Aquila Cover Pattern for Text and Image",'aquila'),
            'categories' => ['cover'],
            'content' => $this->get_pattern_content("template-parts/patterns/cover")
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
            'cover' => __("Cover","aquila"),
            "button" => __("Button","aquila")
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