<?php
/**
 * Project List Template For Frontpage
 * @package SimpleCharm Portfolio
 */
if( ! defined( 'ABSPATH' ) ) {
	exit;
}



if (is_array($args) && array_key_exists("works", $args) && !empty($args['works']) && !empty(array_merge(...$args['works'])) && !simplecharm_portfolio_works_blank($args['works'])):

?>
	<div class="project-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral"><?php _e("Work","simplecharm-portfolio"); ?></div>
		<p><?php _e("Some of the noteworthy projects I have built:","simplecharm-portfolio"); ?></p>
	</div>
	<div class="single-work-info grid lg:grid-cols-2 md:grid-cols-2 gap-x-4 my-3">
	<?php 
	foreach($args['works'] as $work):
		if(is_array($work) && empty($work)) continue;
		if(array_key_exists('title', $work) && empty($work['title'])) continue;
	?>
		<div class="line-break-anywhere" tabindex="0">
			<div class="flex flex-col my-4 gap-y-7 p-6 shadow-2xl">
			<h2 class="text-5xl">
				<?php echo esc_html(isset($work['title']) ? $work['title'] : ''); ?>
			</h2>
			<p class="overflow-y-auto">
				<?php echo esc_html(isset($work['description']) ? $work['description'] : ''); ?>
			</p>
			<?php printf(
				wp_kses(
					simplecharm_portfolio_split_tags(isset($work['tags']) ? $work['tags'] : ''),
					[
						'div' => [
							'class' => []
						]
					]
				)
			) ?>
		<?php if(array_key_exists('link',$work) && !empty($work['link'])): ?>
			<div class="work-live-link">
			<a href="<?php echo esc_url(isset($work['link']) ? $work['link'] : ''); ?>"><span class="dashicons dashicons-external"></span></i></a>
		</div>
	<?php endif; ?>
		</div>
		</div>
<?php endforeach; ?>
	</div>

<?php endif; ?>