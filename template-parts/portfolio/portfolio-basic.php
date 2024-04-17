<?php
/**
 * Basic Settings 
 * @package SimpleCharm Portfolio
 */
?>
<h3>Basic Informations</h3>
<div class="portfolio-section portfolio-intro">
	<label for="name">Name:</label>
	<input type="text" id="name" class="user-name" name="simplecharm_portfolio[name]" value="<?php echo esc_html($args["name"])  ?>">
	<label for="image">Image:</label>

	<input id="image" class="simplecharm_portfolio_user_image" type="hidden" name="simplecharm_portfolio[image]" value="<?php echo esc_url($args["user_image"]);  ?>">
	<img class="simplecharm-portfolio-user-image" src="<?php echo esc_html($args["user_image"]);  ?>" width="100%">

	<label for="short-description">Short Description:</label>
	<textarea id="short-description" class="short-description" name="simplecharm_portfolio[short_description]"><?php echo esc_html($args["short_description"])  ?></textarea>
	<label for="address">Address:</label>
	<input type="text" id="address" class="user-address" name="simplecharm_portfolio[address]" value="<?php echo esc_html($args["address"])  ?>">
	<label for="available">Available:</label>
	<input type="checkbox" id="available" class="user-available" name="simplecharm_portfolio[available]" <?php echo esc_html(checked($args["available"], 'True'));  ?>>
</div>