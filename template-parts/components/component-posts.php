<?php
/**
 * Template For Loading Post in Blog page,Category page, Search etc.
 * @package Simplecharm Portfolio
 */
if( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<div class="simplecharm-portfolio-form">
		<?php get_search_form(); ?>
	</div>
	<?php 
	if(is_category()):
		?>
		<h1 class="text-2xl"><?php _e('All Posts From','simplecharm-portfolio'); ?> <?php single_cat_title(); ?></h1>
		<?php
		elseif(is_tag()):
			?>
			<h1 class="text-2xl"><?php _e("All Posts Related To","simplecharm-portfolio"); ?> <?php single_tag_title(); ?></h1>
		<?php
			endif;
		?>
	<?php if(have_posts()):?>
		<section class="simplecharm-portfolio-blogs grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 m-3"><?php
		    while (have_posts()) : the_post();
		    	if(!is_page()):
		        ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <h3 class="text-2xl"><a
		            class="underline" 
		            href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></h1>
		    <div class="post-meta">
		    	<?php if(empty(get_the_title())): ?>
		    <a class="underline" href="<?php echo esc_url(get_the_permalink()); ?>">
		        <?php endif; ?>
		        <span class="post-date"><?php echo esc_html(get_the_date()); ?></span>
	    		<?php if(empty(get_the_title())): ?>
		    </a>
		        <?php endif; ?>
		        <span class="post-author"><a
		                class="underline" 
		                href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo esc_html(get_the_author()); ?></a></span>
		    </div>
		    <div class="post-content"><?php echo esc_html(get_the_excerpt()); ?></div>
		</article>

		<?php endif;endwhile; ?>
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