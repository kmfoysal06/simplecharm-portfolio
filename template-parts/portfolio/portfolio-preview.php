<?php
/**
 * Preview All Update About Portfolio in a Basic Template
 * @package Simplecharm Portfolio
 */
?>
<div class="portfolio-section-wrapper">
	<h3 class="portfolio-section-toggle">Your Informations Here:-</h3>
	<div class="page-contents portfolio-section-content">
		<div class="portfolio-intro">
			<p>Name:- <?php echo esc_html($args['name']); ?></p>
			<p>Image:- <img src="<?php echo esc_url($args['user_image']); ?>" width="100px"></p>
			<p>2nd Image:- <img src="<?php echo esc_url($args['user_image2']); ?>" width="100px"></p>
			<p>Email:- <?php echo esc_html($args['email']); ?></p>
			<p>Phone:- <?php echo esc_html($args['phone']); ?></p>
			<p>Short Description:- <?php echo esc_html($args['short_description']); ?></p>
			<p>Description:- <?php echo esc_html($args['description']); ?></p>
			<p>Address:- <?php echo esc_html($args['address']); ?></p>
			<p>Availabel:- <?php echo esc_html($args['available']); ?></p>
			<p>Social Links:-  <?php 
	$social_links = simplecharm_portfolio_link_social($args['social_links']);
	echo $social_links;
	?></p>
			<p>Skills:- <?php echo implode(', ', $args['skills']) ?></p>
		</div>
	</div>
</div>