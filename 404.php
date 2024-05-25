<?php
/**
 * 404 Page Template
 * @package SimpleCharm Portfolio
 */
if( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<div class="simplecharm-portfolio-404 min-h-screen grid place-items-center">
	<h2 class="text-4xl"><?php _e("Page Not Found","simplecharm-portfolio"); ?></h2>
</div>
<?php
get_footer();
