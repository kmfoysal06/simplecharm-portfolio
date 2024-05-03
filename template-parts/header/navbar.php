<?php
/**
 * Navbar Template
 * @package SimpleCharm Portfolio
 */
$menus = \SIMPLECHARM_PORTFOLIO\Inc\Classes\Menus::get_instance();
?>
<a class="skip-link screen-reader-text" href="#simplecharm-content">
        <?php _e( 'Skip to content', 'simplecharm-portfolio' ); ?></a>
        <div class="simplecharm-portfolio-header">
            <div class="simplecharm-portfolio-header-contents flex justify-between">
                <span>
                    <?php
                if(has_custom_logo()){
                    the_custom_logo();
                }else{
                    echo '<h1>'.get_bloginfo('name').'</h1>';
                }
                ?>
                </span>
                <nav role="navigation" class="simplecharm-portfolio-main-navigation flex flex-row-reverse">
                <a class="simplecharm-portfolio-navigation-toggler menu-toggler z-10 relative block hidden" href="#simplecharm-portfolio-navigation">
                    <span class="dashicons dashicons-menu-alt3"></span>
                </a>
                <div class="absolute right-0" id="simplecharm-portfolio-navigation">
                    <?php
                        if(has_nav_menu( "simplecharm_portfolio_header_menu" )){
                            wp_nav_menu( [
                                'theme_location' => 'simplecharm_portfolio_header_menu',
                            ] );
                        }
                    ?>
                </div>
                </nav>
            </div>
            <div class="simplecharm-header-image">
                <img alt="header-image" src="<?php header_image(); ?>"
                    width="<?php echo absint( get_custom_header()->width ); ?>"
                    height="<?php echo absint( get_custom_header()->height ); ?>">
            </div>
        </div>