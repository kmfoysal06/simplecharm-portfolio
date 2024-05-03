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

<section class="simplecharm-portfolio-blogs grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 m-3">
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<article class="simplecharm-portfolio-blog">
				<h2 class="text-2xl"><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="bg-blue-500 text-white py-2 px-4 inline-block">Read More</a>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>
</section>