<?php
/**
 * Blogs Page Index
 * @package Simplecharm Portfolio
 */

if( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

	<div class="search-box">
		<span class="text-center simplecharm-portfolio-form"><?php get_search_form(); ?></span>
	</div>
<section class="simplecharm-portfolio-blogs grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 m-3">
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<article <?php post_class("simplecharm-portfolio-blog p-2"); ?> id="<?php esc_html__(the_ID(),"simplecharm-portfolio"); ?>">
				<h2 class="text-2xl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="bg-blue-500 text-white py-2 px-4 inline-block">Read More</a>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>
</section>