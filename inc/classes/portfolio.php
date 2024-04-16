<?php
/** Customizations of The Front Portfolio Page
 * @package SimpleCharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;

use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;

class Portfolio
{
    use Singleton;

    public function __construct()
    {
        $this->setup_hook();
    }
    public function setup_hook()
    {
        add_action("admin_menu", [$this, "add_menu"]);
        add_action("admin_menu", [$this, "add_submenu"]);
        add_action("admin_init", [$this, "save_data"]);
    }
    public function add_menu()
    {
        add_menu_page(
            'Portfolio Page',
            "Portfolio",
            "manage_options",
            "simplecharm_portfolio_page",
            [$this, "portfolio_html"],
            "dashicons-portfolio"
        );
    }
    public function add_submenu()
    {
        add_submenu_page(
            "simplecharm_portfolio_page",
            "Customize Portfolio",
            "Customize Portfolio",
            "manage_options",
            "simplecharm_portfolio_menu",
            [$this, "portfolio_submenu_html"]
        );
    }
    public function portfolio_html()
    {
    	$saved_values = $this->display_saved_value();
        ?>
		<div class="admin-portfolio-page__container">
			<div class="admin-portfolio-page">
				<?php get_template_part("template-parts/portfolio/portfolio","basic-preview",$saved_values); ?>
			</div>
		</div>
		<?php
}
    public function portfolio_submenu_html()
    {
    	$portfolio_saved_data = [
    		'name' => $this->saved_value('text', 'name'),
    		'short_description' => $this->saved_value('text', 'short_description'),
    		'address' => $this->saved_value('text', 'address'),
    		'available' => $this->saved_value('text', 'available'),
    	]
        ?>
		<div class="admin-portfolio-modify__container">
			<div class="admin-portfolio-modify">
				<div class="page-title">
					<h3>Your Informations Here:-</h3>
				</div>
				<form class="page-contents" method="POST">
						<!-- basic settings -->
						<?php get_template_part( "template-parts/portfolio/portfolio","basic", $portfolio_saved_data); ?>
						<input type="hidden" name="simplecharm-portfolio__nonce" value="<?php echo wp_create_nonce("simplecharm_portfolio_modify_page__nonce") ?>">
						<input type="submit" name="update_portfolio_data" value="UPDATE" class="btn">
				</form>
			</div>
		</div>
		<?php
}
    public function save_data()
    {
        if (isset($_POST['update_portfolio_data'])) {
            if (!isset($_POST['simplecharm-portfolio__nonce']) || !wp_verify_nonce($_POST['simplecharm-portfolio__nonce'], 'simplecharm_portfolio_modify_page__nonce')) {
                return;
            }
            $modified_data = $_POST['simplecharm_portfolio'];
            if (update_option('simplecharm_portfolio_data', $this->sanitize_array($modified_data))) {
                // Display success message
                add_action('admin_notices', function () {
                    echo '<div class="notice notice-success is-dismissible"><p>Data saved successfully!</p></div>';
                });
            }
        }

    }
    public function saved_value($type = 'text', $data_key = '')
    {
        $option_value = get_option("simplecharm_portfolio_data");

        switch ($type) {

            case 'text':
                if (is_array($option_value) && array_key_exists($data_key, $option_value)) {
                    return $option_value[$data_key];
                }else{
                	return "";
                }
                break;
            case "checkbox":
                if (is_array($option_value) && array_key_exists($data_key, $option_value)) {
                    return $option_value[$data_key];
                }else{
                	return "";
                }
                break;

            default:
                return;
        }
    }
    public function display_saved_value(){
    	$option_value = get_option("simplecharm_portfolio_data");
    	$saved_values = [];
		if(is_array($option_value)){
			$name = array_key_exists("name", $option_value) ? $option_value["name"] : "";
			$short_description = array_key_exists("short_description", $option_value) ? $option_value["short_description"] : "";
			$address = array_key_exists("address", $option_value) ? $option_value["address"] : "";
			$available = (array_key_exists("available", $option_value) && $option_value['available'] === 'on') ? 'True' : "False";
		}
		$saved_values = [
			'name' => $name, 
			'short_description' => $short_description, 
			'address' => $address, 
			'available' => $available, 
		];

		return $saved_values;
    }    
        public function sanitize_array($input_array){
            if(is_array($input_array)){
                return array_map([$this,'sanitize_array'], $input_array);
            }else{
                return is_scalar($input_array) ? sanitize_text_field($input_array) : $input_array ;
            }
        } 
}
