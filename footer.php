<?php
/**
 * Footer Template
 * @package SimpleCharm Portfolio
 */
if( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	</main>
	<footer role="contentinfo" class="site-footer w-full bg-gray-400 text-white py-3 text-center">
		<div class="footer-copyright">
			<p>&copy; <?php _e('2024 | All Rights Are Reserved','simplecharm-portfolio') ?></p>
		</div>
	</footer>
	<?php wp_footer();?>
	<!-- Loading All Svg -->
	<?php get_template_part("template-parts/components/component", "svg");?>
</body>
</html>