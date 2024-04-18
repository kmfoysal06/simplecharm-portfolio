<?php
/**
 * Customize Contact Informations
 * @package SimpleCharm Portfolio
 */
?>
<h3>Contact Informations</h3>
<div class="portfolio-section portfolio-contact">
	<label for="email">Email:</label>
	<input type="email" id="email" class="email" name="simplecharm_portfolio[email]" value="<?php echo esc_html($args["email"]);  ?>">

	<label for="phone">Mobile:</label>
	<input type="tel" id="phone" class="phone" name="simplecharm_portfolio[phone]" value="<?php echo esc_html($args["phone"]);  ?>">
</div>