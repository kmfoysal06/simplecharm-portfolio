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
<?php if(have_posts()): ?>
<section class="simplecharm-portfolio-blogs grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 m-3">
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<article <?php post_class("simplecharm-portfolio-blog p-2"); ?> id="post-<?php esc_html__(the_ID(),"simplecharm-portfolio"); ?>">
				<h2 class="text-2xl"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h2>
				<p><?php echo apply_filters('the_excerpt', get_the_excerpt()); ?></p>
				<a href="<?php the_permalink(); ?>" class="bg-blue-500 text-white py-2 px-4 inline-block"><?php _e('Read More'); ?></a>
			</article>

		<?php endwhile; ?>
</section>
	<?php else: ?>
		<div class="grid min-h-screen justify-center items-center">
			<p class="text-center"><?php esc_html_e('No posts found.', 'simplecharm-portfolio'); ?></p>
		</div>
	<?php endif; ?>
	<?php
	the_posts_pagination(array(
	    'mid_size' => 2,
	    'prev_text' => 'Previous',
	    'next_text' => 'Next',
	));
	?>