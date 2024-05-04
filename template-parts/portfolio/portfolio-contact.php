<?php
/**
 * Customize Contact Informations
 * @package SimpleCharm Portfolio
 */
?>
<div class="portfolio-section-wrapper">
	<h3 class="portfolio-section-toggle"><?php _e("Contact Informations",'simplecharm-portfolio'); ?></h3>
<div class="portfolio-section portfolio-contact portfolio-section-content">
	<label for="email"><?php _e("Email",'simplecharm-portfolio'); ?></label>
	<input type="email" id="email" class="email" name="simplecharm_portfolio[email]" value="<?php echo esc_html($args["email"]);  ?>">

	<label for="phone"><?php _e("Mobile",'simplecharm-portfolio'); ?></label>
	<input type="tel" id="phone" class="phone" name="simplecharm_portfolio[phone]" value="<?php echo esc_html($args["phone"]);  ?>">
</div>
</div>