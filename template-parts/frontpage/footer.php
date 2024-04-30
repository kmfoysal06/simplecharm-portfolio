<?php
/**
 * Footer For Front Page
 */
?>
<div class="footer-inner flex flex-col justify-center gap-3">
			<div class="badge badge-neutral p-2 self-center">Get in Touch</div>
			<div class="footer-text">
				<p>
					What’s next? Feel free to reach out to me if you're looking for <br> a developer, have a query, or simply want to connect.
				</p>
			</div>
			<div class="footer-mail flex justify-center items-center gap-x-3">
				<i class="text-3xl fa fa-envelope fa-3" aria-hidden="true"></i>
				<h2 class="text-3xl"><?php echo esc_html($args["email"]); ?></h2>
				<i class="text-3xl fa-solid fa fa-clipboard fa-3 simplecharm-portfolio-copy-mail"></i>
			</div>
			<div class="footer-phone flex justify-center items-center gap-x-3">
				<i class="text-3xl fa fa-phone" aria-hidden="true"></i>
				<h2 class="text-3xl"> <?php echo esc_html($args["phone"]); ?> </h2>
				<i class="text-3xl fa-solid fa fa-clipboard fa-3 simplecharm-portfolio-copy-phone"></i>
			</div>
			<div class="footer-social-links">
				<p>You may also find me on these platforms!</p>
				<div class="social-link flex gap-3 my-2 justify-center">
				    <?php simplecharm_portfolio_link_social_frontend($args['social_links']); ?>
				</div>
			</div>
		</div>