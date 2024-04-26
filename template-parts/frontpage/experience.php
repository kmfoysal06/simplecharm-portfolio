<?php
/**
 * Experience Template
 * @package SimpleCharm Portfolio
 */
?>
<div class="experience-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral">Experience</div>
		<p>Here is a quick summary of my most recent experiences:</p>
	</div>
	<div class="experience-content">
		<?php
		if (is_array($args) && array_key_exists("experiences", $args)):
		$experiences = $args['experiences'];
		foreach($experiences as $single_experience):
		$flattern_experience = simplecharm_portfolio_flatter_array($single_experience);
		?>
		<div class="grid grid-cols-3 p-2 my-2 shadow-2xl">
			<div class="experience-name flex justify-center items-center">
				<h2 class="text-5xl">Fiverr</h2>
			</div>
			<div class="experience-info experience-name flex flex-col justify-center">
				<h3 class="text-2xl">Sr. Frotend Developer</h3>
				<ul class="list-disc">
					<li>Lorem ipsum dolor sit, amet, consectetur adipisicing elit.</li>
					<li>fuga recusandae vel qui, aperiam nisi nostrum nobis eos modi ducimus magni ea facilis dolores.</li>
					<li>Laborum, beatae sapiente. Eaque facilis eum, corrupti neque minima placeat, qui nihil.</li>
					<li>Lorem ipsum dolor sit, amet, consectetur adipisicing elit.</li>
				</ul>
			</div>
			<div class="experience-date experience-name flex justify-center items-center">
				<h4>Jan 2020 - Present</h4>
			</div>
		</div>
		<?php
	endforeach;
	endif;
		?>
	</div>