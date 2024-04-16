<?php
/**
 * Navbar Template
 * @package SimpleCharm Portfolio
 */
$menus = \SIMPLECHARM_PORTFOLIO\Inc\Classes\Menus::get_instance();
?>
<div class="header__inner">
	<div class="header__logo">
		
	</div>
	<div class="header__menu">
		<?php
			if(has_nav_menu("simplecharm_portfolio_header_menu")){
				?>
				<nav>
		        <div class="navbar bg-base-100">
		            <div class="flex-1">
		                <a class="btn btn-ghost text-xl">
		                	<?php
							if(has_custom_logo()){
								the_custom_logo();
							}else{
								echo "<h1><a href='".esc_url(home_url('/'))."'>".get_bloginfo("name")."</a></h1>";
							}
						?>
		                </a>
		            </div>
				<?php
				$menus->wp_nav_menu('simplecharm_portfolio_header_menu');
				?>
		        </div>
		    </nav>
				<?php
			}
		?>
	</div>
</div>