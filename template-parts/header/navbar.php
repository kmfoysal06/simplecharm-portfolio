<?php
/**
 * Navbar Template
 * @package SimpleCharm Portfolio
 */
$menus = \SIMPLECHARM_PORTFOLIO\Inc\Classes\Menus::get_instance();
?>
<a class="skip-link screen-reader-text" href="#simplecharm-content">
        <?php _e( 'Skip to content', 'simplecharm-portfolio' ); ?></a>
        <div class="simplecharm-header">
            <div class="simplecharm-header-contents">
                <span>
                    <?php
                if(has_custom_logo()){
                    the_custom_logo();
                }
                    ?>
                    <?php if(display_header_text()){
                    ?>
                    <h1 class="simplecharm-site-title simplecharm-model-shadow simplecharm-model-link">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <p class="simplecharm-site-description">
                        <?php bloginfo('description'); ?>
                    </p>
                    <?php
                }
                ?>
                </span>
                <nav role="navigation" class="simplecharm-main-navigation">
                    <?php
                if(has_nav_menu( "simplecharm_portfolio_header_menu" )){
                    wp_nav_menu( [
                        'theme_location' => 'simplecharm_portfolio_header_menu',
                    ] );
                }
                ?>
                </nav>
            </div>
            <div class="simplecharm-header-image">
                <img alt="header-image" src="<?php header_image(); ?>"
                    width="<?php echo absint( get_custom_header()->width ); ?>"
                    height="<?php echo absint( get_custom_header()->height ); ?>">
            </div>
        </div>