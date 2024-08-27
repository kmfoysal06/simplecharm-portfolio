<?php
/**
 * Navbar Template For Header
 * @package SimpleCharm Portfolio
 */
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
$menus = \SIMPLECHARM_PORTFOLIO\Inc\Classes\Menus::get_instance();
$menu = wp_nav_menu( [
            'theme_location' => 'simplecharm_portfolio_header_menu',
            'echo' => false,
            'fallback_cb' => '__return_false'
        ] );
?>
        <div class="simplecharm-portfolio-header">
            <div class="simplecharm-portfolio-header-contents flex justify-between items-center">
                <span>
                    <?php
                if(has_custom_logo()){
                    the_custom_logo();
                }else{
                    echo '<h1>'.get_bloginfo('name').'</h1>';
                }
                ?>
                </span>
                <?php
                    if(has_nav_menu( "simplecharm_portfolio_header_menu" )):
                    ?>
                <nav role="navigation" class="simplecharm-portfolio-main-navigation flex flex-row-reverse">
                <?php
                    if ( ! empty ( $menu ) ):
                ?>
                <a class="simplecharm-portfolio-navigation-toggler menu-toggler z-20 relative block hidden" href="#simplecharm-portfolio-navigation">
                    <span class="dashicons dashicons-menu-alt3 z-20 text-black"></span>
                </a>
            <?php endif; ?>
                <div class="absolute right-1 bottom-0 z-10" id="simplecharm-portfolio-navigation">
                    <?php
                        echo $menu;
                        endif;
                    ?>
                </div>
                </nav>
            </div>
        </div>