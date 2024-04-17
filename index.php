<?php
/**
 * Main Index Template
 * @package SimpleCharm Portfolio
 */
$portfolio             = \SIMPLECHARM_PORTFOLIO\Inc\Classes\Portfolio::get_instance();
$portfolio_saved_value = $portfolio->display_saved_value();
?>
<!-- Header -->
<?php get_header();?>

<!-- hero section -->
<section class="min-h-screen bg-base-200 min-h-lvh my-2">
  <?php
get_template_part("template-parts/frontpage/basic-info", "", $portfolio_saved_value);
?>
</section>

<!-- about me section -->
<section class="about-me min-h-screen bg-base-200 min-h-max my-2 flex">
 <?php
get_template_part("template-parts/frontpage/aboutme", "", $portfolio_saved_value);
?>
</section>

<!-- skills section -->
<section class="skills min-h-max p-6 my-2 flex flex-col">
	<?php get_template_part("template-parts/portfolio/portfolio","skills"); ?>
</section>

<!-- Experience Section -->
<section class="experience min-h-max p-6 my-2 flex flex-col">
	<?php get_template_part("template-parts/portfolio/portfolio","experience"); ?>
</section>

<!-- Project Section -->
<section class="projects min-h-max p-6 my-2 flex flex-col">
	<?php get_template_part("template-parts/portfolio/portfolio","projects"); ?>
</section>

<!-- Testimonials Section -->
<section class="testimonials min-h-max p-6 my-2 flex flex-col">
<?php get_template_part("template-parts/portfolio/portfolio","testimonials"); ?>
</section>

<!-- Contact Section -->
<section class="home-footer w-full bg-gray-400 text-white py-3 text-center shadow-2xl my-2">
	<?php get_template_part("template-parts/portfolio/portfolio", "footer", $portfolio_saved_value);?>
</section>

<?php get_footer();?>