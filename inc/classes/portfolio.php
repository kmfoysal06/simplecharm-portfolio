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
        add_action('admin_enqueue_scripts', [$this, "load_media"]);
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
    /**
     * Main Option Page For Portfolio Page
     */
    public function portfolio_html()
    {
        $saved_values = $this->display_saved_value();
        ?>
        <div class="admin-portfolio-page__container">
            <div class="admin-portfolio-page">
                <?php get_template_part("template-parts/portfolio/portfolio", "basic-preview", $saved_values);?>
            </div>
        </div>
        <?php
}
    /**
     * Submenu Option Page For Portfolio Page
     */
    public function portfolio_submenu_html()
    {
        $portfolio_saved_data = $this->display_saved_value();
        ?>
        <div class="admin-portfolio-modify__container">
            <div class="admin-portfolio-modify">
                <div class="page-title">
                    <h3>Your Informations Here:-</h3>
                </div>
                <form class="page-contents" method="POST">
                        <!-- basic settings -->
                        <?php get_template_part("template-parts/portfolio/portfolio", "basic", $portfolio_saved_data);?>
                        <!-- About Me  -->
                        <?php get_template_part("template-parts/portfolio/portfolio", "aboutme", $portfolio_saved_data);?>
                        <input type="hidden" name="simplecharm-portfolio__nonce" value="<?php echo wp_create_nonce("simplecharm_portfolio_modify_page__nonce") ?>">
                        <input type="submit" name="update_portfolio_data" value="UPDATE" class="btn">
                </form>
            </div>
        </div>
        <?php
}
    /**
     * Updating Informations About Portfolio
     */
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
    /**
     * Return The Saved Value as Array
     * @param string $type default text
     * @param string $data_key default empty string
     */
    public function saved_value($type = 'text', $data_key = '')
    {
        $option_value = get_option("simplecharm_portfolio_data");

        if (is_array($option_value) && array_key_exists($data_key, $option_value)) {
            return $option_value[$data_key];
        } else {
            return "";
        }
    }
    /**
     * This Function Will Return The Saved Value
     */

    public function display_saved_value()
    {
        $option_value = get_option("simplecharm_portfolio_data");
        $saved_values = [
            'name'              => 'Charm',
            'user_image'        => SIMPLECHARM_PORTFOLIO_DIR_URI . "/assets/src/img/simplecharm-default-avater.jpg",
            'user_image2'       => SIMPLECHARM_PORTFOLIO_DIR_URI . "/assets/src/img/simplecharm-default-avater.jpg",
            'short_description' => "Hi, This Is Default Lorem Ipsum Description For You Lorem ipsum dolor sit amet, consectetur adipisicing elit!",
            'address'           => "Earth",
            'description'       => "Hi, This Is Default Lorem Ipsum Description For You Lorem ipsum dolor sit amet, consectetur adipisicing elit!Hi, This Is Default Lorem Ipsum Description For You Lorem ipsum dolor sit amet, consectetur adipisicing elit!Hi, This Is Default Lorem Ipsum Description For You Lorem ipsum dolor sit amet, consectetur adipisicing elit!",
            'available'         => ""];
        if (is_array($option_value)) {
            $name              = array_key_exists("name", $option_value) ? $option_value["name"] : "";
            $image             = (array_key_exists("image", $option_value) && !empty($option_value['image'])) ? $option_value["image"] : SIMPLECHARM_PORTFOLIO_DIR_URI . "/assets/src/img/simplecharm-default-avater.jpg";
            $image2            = (array_key_exists("image_2", $option_value) && !empty($option_value['image_2'])) ? $option_value["image_2"] : SIMPLECHARM_PORTFOLIO_DIR_URI . "/assets/src/img/simplecharm-default-avater.jpg";
            $short_description = array_key_exists("short_description", $option_value) ? $option_value["short_description"] : "";
            $description       = array_key_exists("description", $option_value) ? $option_value["description"] : "";
            $address           = array_key_exists("address", $option_value) ? $option_value["address"] : "";
            $available         = (array_key_exists("available", $option_value) && $option_value['available'] === 'on') ? 'True' : "False";
            $saved_values      = [
                'name'              => $name,
                'user_image'        => $image,
                'user_image2'       => $image2,
                'short_description' => $short_description,
                'description'       => $description,
                'address'           => $address,
                'available'         => $available,
            ];
        }

        return $saved_values;
    }
    /**
     * Sanitize The Array
     * @param array $input_array
     */

    public function sanitize_array($input_array)
    {
        if (is_array($input_array)) {
            return array_map([$this, 'sanitize_array'], $input_array);
        } else {
            return is_scalar($input_array) ? sanitize_text_field($input_array) : $input_array;
        }
    }
    /**
     * Load Media
     */
    public function load_media()
    {
        wp_enqueue_media();
    }
}
