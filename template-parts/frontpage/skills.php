<?php
/**
 * Skills Template
 * @package SimpleCharm Portfolio
 */
if(is_array($args['skills']) && !empty($args['skills'])){
		?>
		<div class="skills-title my-3 flex flex-col items-center">
			<div class="badge badge-neutral"><?php _e("Skills","simplecharm-portfolio"); ?></div>
			<p><?php _e("The skills, tools and technologies I am really good at:","simplecharm-portfolio"); ?></p>
			</div>
		<div class="skills-container items-center gap-3 grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3">
			<?php
			foreach($args['skills'] as $skill){
				?>
			<div class="simplecharm-skill-card gap-3 cursor-pointer p-5 w-40 h-40 bg-blue-700 flex justify-center items-center transition-all">
				<h4 class="skill-name text-center text-lg"><?php _e($skill,"simplecharm-portfolio"); ?></h4>
				<div class="simplecharm-skill-card-blank"></div>
			</div>
		<?php
			}
		?>
		</div>
<?php
}