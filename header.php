<?php
/**
 * Header Template
 * @package SimpleCharm Portfolio
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class("mx-2"); ?>>
	<?php
		if(function_exists("wp_body_open")){
			wp_body_open();
		}
	?>
	<header role="banner" class="header">
		<?php get_template_part("template-parts/header/navbar"); ?>
	</header>
	<main>