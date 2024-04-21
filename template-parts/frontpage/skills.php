<?php
/**
 * Skills Template
 * @package SimpleCharm Portfolio
 */
if(is_array($args['skills']) && !empty($args['skills'])){
		?>
		<div class="skills-title my-3 flex flex-col items-center">
			<div class="badge badge-neutral">Skills</div>
			<p>The skills, tools and technologies I am really good at:</p>
			</div>
		<div class="skills-container items-center gap-3 grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3">
			<?php
			foreach($args['skills'] as $skill){
				?>
			<div class="gap-3 cursor-pointer p-5 w-40 h-40 bg-blue-700 flex justify-center items-center hover:invert transition-all">
				<h4 class="skill-name text-center text-lg"><?php echo $skill; ?></h4>
			</div>
		<?php
			}
		?>
		</div>
<?php
}