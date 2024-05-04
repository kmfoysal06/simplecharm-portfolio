<?php
/**
 * Footer For Front Page
 */
?>
<div class="footer-inner flex flex-col justify-center gap-3">
			<div class="badge badge-neutral p-2 self-center"><?php _e("Get in Touch","simplecharm-portfolio"); ?></div>
			<div class="footer-text">
				<p>
					<?php
					_e("What’s next? Feel free to reach out to me if you're looking for <br> a developer, have a query, or simply want to connect.","simplecharm-portfolio");
					?>
				</p>
			</div>
			<div class="footer-mail flex justify-center items-center gap-x-3">
				<span class="dashicons dashicons-email"></span>
				<h2 class="text-xl md:text-xl"><?php echo esc_html($args["email"]); ?></h2>
				<span class="dashicons dashicons-clipboard simplecharm-portfolio-copy-mail cursor-pointer"></span>
			</div>
			<div class="footer-phone flex justify-center items-center gap-x-3">
				<span class="dashicons dashicons-smartphone"></span>
				<h2 class="text-xl md:text-xl"> <?php echo esc_html($args["phone"]); ?> </h2>
				<span class="dashicons dashicons-clipboard simplecharm-portfolio-copy-phone cursor-pointer"></span>
			</div>
			<div class="footer-social-links">
				<p><?php _e("You may also find me on these platforms!","simplecharm-portfolio"); ?></p>
				<div class="social-link flex gap-3 my-2 justify-center">
				    <?php simplecharm_portfolio_link_social_frontend($args['social_links']); ?>
				</div>
			</div>
		</div>
		<div class="simplecharm-portfolio-bottom-alert" id="simplecharm-portfolio-bottom-alert"></div>