<?php
/**
 * Basic Settings 
 * @package SimpleCharm Portfolio
 */
?>
<div class="portfolio-intro" method="post">
	<label for="name">Name:</label>
	<input type="text" id="name" class="user-name" name="simplecharm_portfolio[name]" value="<?php echo esc_html($args["name"])  ?>">
	<label for="short-description">Short Description:</label>
	<textarea id="short-description" class="short-description" name="simplecharm_portfolio[short_description]"><?php echo esc_html($args["short_description"])  ?></textarea>
	<label for="address">Address:</label>
	<input type="text" id="address" class="user-address" name="simplecharm_portfolio[address]" value="<?php echo esc_html($args["address"])  ?>">
	<label for="available">Available:</label>
	<input type="checkbox" id="available" class="user-available" name="simplecharm_portfolio[available]" <?php echo esc_html(checked($args["available"], 'on'));  ?>>
</div>