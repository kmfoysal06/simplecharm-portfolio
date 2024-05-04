<?php
/**
 * Basic Settings 
 * @package SimpleCharm Portfolio
 */
?>
<div class="portfolio-section-wrapper">
	<h3 class="portfolio-section-toggle"><?php _e("Basic Informations:",'simplecharm-portfolio'); ?></h3>
<div class="portfolio-section portfolio-intro portfolio-section-content">
	<label for="name"><?php _e("Name:",'simplecharm-portfolio'); ?></label>
	<input type="text" id="name" class="user-name" name="simplecharm_portfolio[name]" value="<?php echo esc_html($args["name"])  ?>">
	<label for="image"><?php _e("Image:",'simplecharm-portfolio'); ?></label>

	<input id="image" class="simplecharm_portfolio_user_image" type="hidden" name="simplecharm_portfolio[image]" value="<?php echo esc_url($args["user_image"]);  ?>">
	<img class="simplecharm-portfolio-user-image" src="<?php echo esc_html($args["user_image"]);  ?>" width="100%">

	<label for="short-description"><?php _e("Short Description",'simplecharm-portfolio'); ?></label>
	<textarea id="short-description" class="short-description" name="simplecharm_portfolio[short_description]"><?php echo esc_textarea($args["short_description"])  ?></textarea>
	<label for="address"><?php _e("Address",'simplecharm-portfolio'); ?></label>
	<input type="text" id="address" class="user-address" name="simplecharm_portfolio[address]" value="<?php echo esc_html($args["address"])  ?>">
	<label for="available"><?php _e("Available",'simplecharm-portfolio'); ?></label>
	<input type="checkbox" id="available" class="user-available" name="simplecharm_portfolio[available]" <?php echo esc_html(checked($args["available"], 'True'));  ?>>
</div>
</div>