<?php
/**
 * Main Index Template
 * @package SimpleCharm Portfolio
 */
$portfolio = \SIMPLECHARM_PORTFOLIO\Inc\Classes\Portfolio::get_instance();
$portfolio_saved_value = $portfolio->display_saved_value();
?>
<?php get_header();?>
<!-- hero section -->
<section class="hero min-h-screen bg-base-200 min-h-lvh my-2">
  <?php
  get_template_part("template-parts/frontpage/basic-info","",$portfolio_saved_value);
  ?>
</section>
<!-- about me section -->
<section class="about-me min-h-screen bg-base-200 min-h-max my-2 flex">
  <div class="hero-content flex-col lg:flex-row">
    <img src="https://daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Box Office News!</h1>
      <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi. Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Dolorum, totam laudantium a quam eos ea eligendi quas nisi ratione provident vel laboriosam. Deleniti quod eum fugit, pariatur optio, magnam facere?Lorem, ipsum. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Sit dolorum ducimus accusamus, consequuntur eligendi odit delectus nam voluptates possimus dolor?Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Temporibus corporis asperiores quo deserunt nesciunt incidunt quod vero quisquam. Numquam dicta sint delectus vel nobis libero totam! Nulla, ab, accusantium similique, illum ipsa blanditiis placeat, a quia numquam accusamus soluta fugit. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Illum illo hic voluptate rem eum eveniet animi at quas dolore, tempora molestiae rerum maxime, voluptatem debitis odit accusamus iure nemo aliquam a. Inventore est alias quo consectetur animi repellendus aliquam adipisci? </p>
    </div>
  </div>
</section>
<!-- skills section -->
<section class="skills min-h-max p-6 my-2 flex flex-col">
	<div class="skills-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral">Skills</div>
		<p>The skills, tools and technologies I am really good at:</p>
	</div>
	<div class="skills-container items-center gap-3 grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3">
		<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
		<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
<div class="gap-3 hover:bg-red-900 cursor-pointer p-5 max-w-min">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/js-logo.png" alt="js-logo" width="100%">
		<span>Javascript</span>
	</div>
	</div>
</section>
<section class="experience min-h-max p-6 my-2 flex flex-col">
	<div class="experience-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral">Experience</div>
		<p>Here is a quick summary of my most recent experiences:</p>
	</div>
	<div class="experience-content">
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

		<div class="grid grid-cols-3 p-2 my-2 shadow-2xl">
			<div class="experience-name flex justify-center items-center">
				<h2 class="text-5xl">Fiverr</h2>
			</div>
			<div class="experience-info experience-name flex flex-col justify-center">
				<h3 class="text-2xl">Sr. Frotend Developer</h3>
				<ul class="list-disc">
					<li>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatibus, animi eos. Culpa exercitationem, nihil. Ipsa aperiam pariatur voluptatibus architecto vitae amet quos, veniam, maiores eaque consectetur alias quod necessitatibus!</li>
				</ul>
			</div>
			<div class="experience-date experience-name flex justify-center items-center">
				<h4>Jan 2020 - Present</h4>
			</div>
		</div>
	</div>
</section>

<section class="works min-h-max p-6 my-2 flex flex-col">
	<div class="works-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral">Work</div>
		<p>Some of the noteworthy projects I have built:</p>
	</div>
	<div class="single-work-info grid grid-row lg:grid-cols-2 md:grid-cols-2 lg:grid-cols-1 gap-x-4 my-3 shadow-2xl">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/work-img.png" alt="js-logo" width="100%">
		<div class="flex flex-col my-4 gap-y-7">
			<h2 class="text-xl">
				Fiskil
			</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec urna ac tellus volutpat viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
			</p>
			<div class="work-tags grid lg:grid-cols-4 lg:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-y-3">
				<div class="badge badge-neutral p-4">React</div>
				<div class="badge badge-neutral p-4">Next.js</div>
				<div class="badge badge-neutral p-4">Typescript</div>
				<div class="badge badge-neutral p-4">Nest.js</div>
				<div class="badge badge-neutral p-4">PostgreSQL</div>
				<div class="badge badge-neutral p-4">Tailwindcss</div>
				<div class="badge badge-neutral p-4">Cypress</div>
				<div class="badge badge-neutral p-4">Storybook</div>
				<div class="badge badge-neutral p-4">Git</div>
			</div>
		<div class="work-live-link">
			<a href="#"><i class="fa fa-external-link" aria-hidden="true"></i></a>
		</div>
		</div>
	</div>

	<div class="single-work-info grid grid-row lg:grid-cols-2 md:grid-cols-2 lg:grid-cols-1 gap-x-4 my-3 shadow-2xl">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/work-img.png" alt="js-logo" width="100%">
		<div class="flex flex-col my-4 gap-y-7">
			<h2 class="text-xl">
				Fiskil
			</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec urna ac tellus volutpat viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
			</p>
			<div class="work-tags grid lg:grid-cols-4 lg:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-y-3">
				<div class="badge badge-neutral p-4">React</div>
				<div class="badge badge-neutral p-4">Next.js</div>
				<div class="badge badge-neutral p-4">Typescript</div>
				<div class="badge badge-neutral p-4">Nest.js</div>
				<div class="badge badge-neutral p-4">PostgreSQL</div>
				<div class="badge badge-neutral p-4">Tailwindcss</div>
				<div class="badge badge-neutral p-4">Cypress</div>
				<div class="badge badge-neutral p-4">Storybook</div>
				<div class="badge badge-neutral p-4">Git</div>
			</div>
		<div class="work-live-link">
			<a href="#"><i class="fa fa-external-link" aria-hidden="true"></i></a>
		</div>
		</div>
	</div>

	<div class="single-work-info grid grid-row lg:grid-cols-2 md:grid-cols-2 lg:grid-cols-1 gap-x-4 my-3 shadow-2xl">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/work-img.png" alt="js-logo" width="100%">
		<div class="flex flex-col my-4 gap-y-7">
			<h2 class="text-xl">
				Fiskil
			</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec urna ac tellus volutpat viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
			</p>
			<div class="work-tags grid lg:grid-cols-4 lg:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-y-3">
				<div class="badge badge-neutral p-4">React</div>
				<div class="badge badge-neutral p-4">Next.js</div>
				<div class="badge badge-neutral p-4">Typescript</div>
				<div class="badge badge-neutral p-4">Nest.js</div>
				<div class="badge badge-neutral p-4">PostgreSQL</div>
				<div class="badge badge-neutral p-4">Tailwindcss</div>
				<div class="badge badge-neutral p-4">Cypress</div>
				<div class="badge badge-neutral p-4">Storybook</div>
				<div class="badge badge-neutral p-4">Git</div>
			</div>
		<div class="work-live-link">
			<a href="#"><i class="fa fa-external-link" aria-hidden="true"></i></a>
		</div>
		</div>
	</div>

	<div class="single-work-info grid grid-row lg:grid-cols-2 md:grid-cols-2 lg:grid-cols-1 gap-x-4 my-3 shadow-2xl">
		<img class="my-2" src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/work-img.png" alt="js-logo" width="100%">
		<div class="flex flex-col my-4 gap-y-7">
			<h2 class="text-xl">
				Fiskil
			</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec urna ac tellus volutpat viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.
			</p>
			<div class="work-tags grid lg:grid-cols-4 lg:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-y-3">
				<div class="badge badge-neutral p-4">React</div>
				<div class="badge badge-neutral p-4">Next.js</div>
				<div class="badge badge-neutral p-4">Typescript</div>
				<div class="badge badge-neutral p-4">Nest.js</div>
				<div class="badge badge-neutral p-4">PostgreSQL</div>
				<div class="badge badge-neutral p-4">Tailwindcss</div>
				<div class="badge badge-neutral p-4">Cypress</div>
				<div class="badge badge-neutral p-4">Storybook</div>
				<div class="badge badge-neutral p-4">Git</div>
			</div>
		<div class="work-live-link">
			<a href="#"><i class="fa fa-external-link" aria-hidden="true"></i></a>
		</div>
		</div>
	</div>
</section>


<section class="testimonials min-h-max p-6 my-2 flex flex-col">
	<div class="testimonials-title my-3 flex flex-col items-center">
		<div class="badge badge-neutral">Testimonials</div>
		<p>Nice things people have said about me:</p>
	</div>
	<div class="grid grid-col lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
	<div class="single-testimonials card w-96 bg-base-100 shadow-xl">
	  <div class="avatar m-auto">
		  <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
		    <img src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/icon-avatar.png" alt="js-logo" width="100%">
		  </div>
		</div>
	  <div class="card-body items-center text-center">
	    <blockquote>
	    	“Job well done! I am really impressed. He is very very good at what he does:) I would recommend Sagar and will rehire in the future for Frontend development.”
	    </blockquote>
	    <h2 class="card-title">John Doe</h2>
	    <cite>Founder - xyz.com </cite>
	    <div class="card-actions">
	    </div>
	  </div>
	</div>

	<div class="single-testimonials card w-96 bg-base-100 shadow-xl">
	  <div class="avatar m-auto">
		  <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
		    <img src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/icon-avatar.png" alt="js-logo" width="100%">
		  </div>
		</div>
	  <div class="card-body items-center text-center">
	    <blockquote>
	    	“Great guy, highly recommended for any COMPLEX front-end development job! His skills are top-notch and he will be an amazing addition to any team.”
	    </blockquote>
	    <h2 class="card-title">John Doe</h2>
	    <cite>Founder - xyz.com </cite>
	    <div class="card-actions">
	    </div>
	  </div>
	</div>

	<div class="single-testimonials card w-96 bg-base-100 shadow-xl">
	  <div class="avatar m-auto">
		  <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
		    <img src="<?php echo SIMPLECHARM_PORTFOLIO_DIR_URI ?>/assets/src/img/icon-avatar.png" alt="js-logo" width="100%">
		  </div>
		</div>
	  <div class="card-body items-center text-center">
	    <blockquote>
	    	“Sagar was extremely easy and pleasant to work with and he truly cares about the project being a success. Sagar has a high level of knowledge and was able to work on my MERN stack application without any issues.”
	    </blockquote>
	    <h2 class="card-title">John Doe</h2>
	    <cite>Founder - xyz.com </cite>
	    <div class="card-actions">
	    </div>
	  </div>
	</div>

	</div>
</section>
<section class="home-footer w-full bg-gray-400 text-white py-3 text-center shadow-2xl my-2">
	<div class="footer-inner flex flex-col justify-center gap-3">
			<div class="badge badge-neutral p-2 self-center">Get in Touch</div>
			<div class="footer-text">
				<p>
					What’s next? Feel free to reach out to me if you're looking for <br> a developer, have a query, or simply want to connect.
				</p>
			</div>
			<div class="footer-mail flex justify-center items-center gap-x-3">
				<i class="text-3xl fa fa-envelope fa-3" aria-hidden="true"></i>
				<h2 class="text-3xl">reachsagarshah@gmail.com</h2>
				<i class="text-3xl fa-solid fa fa-clipboard fa-3"></i>
			</div>
			<div class="footer-phone flex justify-center items-center gap-x-3">
				<i class="text-3xl fa fa-phone" aria-hidden="true"></i>
				<h2 class="text-3xl"> +9209203099 </h2>
				<i class="text-3xl fa-solid fa fa-clipboard fa-3"></i>
			</div>
			<div class="footer-social-links">
				<p>You may also find me on these platforms!</p>
				<div class="social-link flex gap-3 my-2 justify-center">
				    <a href="#"><i class="fa-brands fa-github"></i></a>
      				<a href="#"><i class="fa-brands fa-twitter"></i></a>
      				<a href="#"><i class="fa-brands fa-figma"></i></a>
				</div>
			</div>
		</div>
</section>

<?php get_footer();?>