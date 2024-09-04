<?php
/**
 * Meta Boxes
 * @package SimpleCharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;

if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;

class Meta_Boxes{
    use Singleton;
    public function __construct() {
        /**
         * Actions
         */
		$this->setup_hooks();
	}
    public function setup_hooks(){
        add_action("add_meta_boxes",[$this,"show_heading_meta"]);
        add_action("save_post",[$this,"save_heading_meta"]);
    }
    public function show_heading_meta(){
        $screens = ['page'];
        foreach ( $screens as $screen ) {
            add_meta_box(
                'simplecharm_portfolio_show_heading_meta',
                'Show Heading Informations',
                [$this,'show_heading_meta_html'],
                $screen,
                'side'
            );
        }
    }

    public function show_heading_meta_html($post){
        $show_heading = get_post_meta($post->ID,'_simplecharm_portfolio_show_heading',true);
        ?>
        <input type="hidden" name="simplecharm_portfolio_show_heading_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">
        <label title="<?php _e("if yes then the title will be shown as usual in this page.",'simplecharm-portfolio')?>" for="simplecharm_portfolio_show_heading"><?php _e("Show Heading Information",'simplecharm-portfolio')?></label>
        <select name="simplecharm_portfolio_show_heading" id="simplecharm_portfolio_show_heading">
            <option value="yes" <?php echo esc_attr($show_heading) === 'yes' ? 'selected' : ''; ?>>Yes</option>
            <option value="no" <?php echo esc_attr($show_heading) === 'no' ? 'selected' : ''; ?>>No</option>
        </select>
        <?php
    }

    public function save_heading_meta($post_id){
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
        // /check nonce
        if ( ! isset( $_POST['simplecharm_portfolio_show_heading_nonce'] ) ) {
            return;
        }
        if ( ! wp_verify_nonce( $_POST['simplecharm_portfolio_show_heading_nonce'], basename( __FILE__ ) ) ) {
            return;
        }
        
        if ( array_key_exists( 'simplecharm_portfolio_show_heading', $_POST ) ) {
            update_post_meta(
                $post_id,
                '_simplecharm_portfolio_show_heading',
                $_POST['simplecharm_portfolio_show_heading']
            );
        }
    }

}