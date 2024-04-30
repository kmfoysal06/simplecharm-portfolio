<?php
/**
 * Experience Template
 * @package SimpleCharm Portfolio
 */
// $date = strtotime('12-03-2006');
// $output = date('M o',$date);
// echo var_dump($output);
if (is_array($args) && array_key_exists("experiences", $args) && !empty($args['experiences']) && !empty(array_merge(...$args['experiences']))):
?>
<div class="experience-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral">Experience</div>
		<p>Here is a quick summary of my most recent experiences:</p>
	</div>
	<div class="experience-content">
		<?php
		
		$experiences = $args['experiences'];
		foreach($experiences as $single_experience):
		$flattern_experience = simplecharm_portfolio_flatter_array($single_experience);
		if(empty($flattern_experience)) continue;
		$start_date = array_key_exists('start_date',$flattern_experience) && !empty($flattern_experience['start_date']) ? date('M o',strtotime($flattern_experience['start_date'])) : '';
		$working_now = array_key_exists('working',$flattern_experience) ? $flattern_experience['working'] : 'off';
		$end_date = array_key_exists('end_date',$flattern_experience) && !empty($flattern_experience['end_date']) ? date('M o',strtotime($flattern_experience['end_date'])) : '';
		$end_date_status = strtolower($working_now) === 'on' ? 'Present' : $end_date;
		?>
		<div class="grid grid-cols-3 p-2 my-2 shadow-2xl">
			<div class="experience-name flex justify-center items-center">
				<h2 class="text-5xl"><?php echo esc_html($flattern_experience['institution']); ?></h2>
			</div>
			<div class="experience-info experience-name flex flex-col justify-center p-4 gap-4">
				<h3 class="text-2xl"><?php echo esc_html($flattern_experience['post-title']); ?></h3>
				<?php
				echo simplecharm_portfolio_experience_responsibility_list($flattern_experience['responsibility']);
				?>
			</div>
			<div class="experience-date experience-name flex justify-center items-center">
				<?php
				if(!empty($start_date)):
				?>
				<h4><?php echo $start_date; ?> - <?php echo $end_date_status; ?></h4>
			<?php endif; ?>
			</div>
		</div>
		<?php
	endforeach;
	endif;
		?>
	</div>