<?php
/**
 * Preview All Update About Portfolio in a Basic Template
 * @package Simplecharm Portfolio
 */
?>
<div class="portfolio-section-wrapper">
	<h2 class="portfolio-section-toggle"><?php _e("Your Informations are Here:-","simplecharm-portfolio"); ?></h2>
	<div class="page-contents portfolio-section-content">
		<div class="portfolio-intro">
			<p><?php
				_e(sprintf("Name:- %s",esc_html($args['name'])));
				?>
			</p>
			<p><?php
				_e(wp_kses(sprintf('Image:- <img src="%s" width="100px">',esc_url($args['user_image'])),['img'=>['src'=>[],'width'=>array()]]));
				?>
			</p>
			<p>
				<?php
				_e(wp_kses(sprintf('2nd Image:- <img src="%s" width="100px">',esc_url($args['user_image2'])),['img'=>['src'=>[],'width'=>array()]]));
				?>
			</p>
			<p>
				<?php
				_e(sprintf("Mail:- %s",esc_html($args['email'])));
				?>
			</p>
			<p>
				<?php
				_e(sprintf("Phone:- %s",esc_html($args['phone'])));
				?>
			</p>
			<p>
				<?php
				_e(sprintf("Short Description:- %s",esc_html($args['short_description'])));
				?>
			</p>
			<p>
				<?php
				_e(sprintf("Description:- %s",esc_html($args['description'])));
				?>
			</p>
			<p>
				<?php
				_e(sprintf("Address:- %s",esc_html($args['address'])));
				?>
			</p>
			<p>
				<?php
				_e(sprintf("Available:- %s",esc_html($args['available'])));
				?>
			</p>
			<p><?php 
			_e("Social Links:- ","simplecharm-portfolio");
			$social_links = simplecharm_portfolio_link_social($args['social_links']);
			esc_html($social_links);
	?></p>
			<p>
				<?php
				_e(sprintf("Skills:- %s",implode(', ',$args['skills'])));
				?>
				</p>
			<p>
				<?php
				_e(sprintf("Experience:- %s",implode(', ', simplecharm_portfolio_experience_admin($args['experiences']))));
				?>
				</p>
			</p>
		</div>
	</div>
</div>