<?php
/**
 * Register Menus For Theme
 * @package SimpleCharm Portfolio
 */
namespace SIMPLECHARM_PORTFOLIO\Inc\Classes;
use SIMPLECHARM_PORTFOLIO\Inc\Traits\Singleton;
class Menus{
    use Singleton;

    public function __construct(){ 
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /**
         * Actions.
         */
        add_action("init",[$this,"register_menus"]);
    }
    public function register_menus(){
        register_nav_menus([
            'simplecharm_portfolio_header_menu' => esc_html__("Header Menu","simplecharm-portfolio"),
            'simplecharm_portfolio_footer_menu' => esc_html__("Footer Menu","simplecharm-portfolio"),
        ]);
    }
    public function get_menu_location($location){
        $locations = get_nav_menu_locations();
        $menu_id = isset($locations[$location])?$locations[$location]:'';
        return $menu_id;
    }
    public function get_child_menus($menus,$parent_id){
        $child_menu = [];
        if(!empty($menus) && is_array($menus) ){
            foreach($menus as $menu){
                if(intval($menu->menu_item_parent) == $parent_id){
                    array_push($child_menu,$menu);
                }
            }
        }
        return $child_menu;
    }
   public function wp_nav_menu($location){
    ?>
    
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <?php
                    $menu_id = $this->get_menu_location($location);
                    $menu = wp_get_nav_menu_items($menu_id);
                    if (!empty($menu) && is_array($menu)) {
                        foreach ($menu as $menu_item) {
                            if (!$menu_item->menu_item_parent) {
                                $child_items = $this->get_child_menus($menu, $menu_item->ID);
                                $has_children = !empty($child_items) && is_array($child_items);
                                ?>
                                <li>
                                    <?php if (!$has_children) { ?>
                                        <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
                                    <?php } else { ?>
                                        <details>
                                            <summary><?php echo $menu_item->title; ?></summary>
                                            <ul class="p-2 bg-base-100 rounded-t-none">
                                                <?php foreach ($child_items as $child_item) { ?>
                                                    <li><a href="<?php echo $child_item->url; ?>"><?php echo $child_item->title; ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </details>
                                    <?php } ?>
                                </li>
                                <?php
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
    <?php
}

}
