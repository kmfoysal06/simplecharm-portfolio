<?php
/**
 * About Me Section Setting
 * @package SimpleCharm Portfolio
 */
?>
<div class="portfolio-section-wrapper">
	<h3 class="portfolio-section-toggle">About Me:</h3>
<div class="portfolio-section portfolio-aboutme portfolio-section-content">
	<label for="description">Description:</label>
	<textarea id="description" class="description" name="simplecharm_portfolio[description]"><?php echo esc_html($args["description"]) ?></textarea>
	<label for="image2">Another Image: </label>
	<input id="image2" class="simplecharm_portfolio_user_image2" type="hidden" name="simplecharm_portfolio[image_2]" value="<?php echo esc_url($args["user_image"]); ?>">
	<img class="simplecharm-portfolio-user-image2" src="<?php echo esc_html($args["user_image2"]); ?>" width="100%">
</div>
</div>