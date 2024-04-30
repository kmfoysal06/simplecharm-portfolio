<?php
/**
 * Project List Template
 * @package SimpleCharm Portfolio
 */
if (is_array($args) && array_key_exists("works", $args) && !empty($args['works']) && !empty(array_merge(...$args['works']))):

?>
	<div class="project-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral">Work</div>
		<p>Some of the noteworthy projects I have built:</p>
	</div>
	<div class="single-work-info grid lg:grid-cols-2 md:grid-cols-2 gap-x-4 my-3">
	<?php 
	foreach($args['works'] as $work):
		if(is_array($work) && empty($work)) continue;
		if(array_key_exists('title', $work) && empty($work['title'])) continue;
	?>
		<div class="">
			<div class="flex flex-col my-4 gap-y-7 p-6 shadow-2xl">
			<h2 class="text-5xl">
				<?php echo esc_html(isset($work['title']) ? $work['title'] : ''); ?>
			</h2>
			<p>
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
		<div class="work-live-link">
			<a href="<?php echo esc_url(isset($work['link']) ? $work['link'] : ''); ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a>
		</div>
		</div>
		</div>
<?php endforeach; ?>
	</div>

<?php endif; ?>