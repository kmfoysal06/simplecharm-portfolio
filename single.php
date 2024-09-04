<?php
/**
 * Single Page Template
 * @package SimpleCharm Portfolio
 */
if( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
	<?php 
		if(have_posts()):
		the_post(); 
	?>
	<?php if(post_password_required()):
		?>
		<div class="simplecharm-portfolio-form my-3 text-center">
			<?php echo get_the_password_form(); ?>
		</div>
		<?php
	else:
	?>
<article id="post-<?php the_ID(); ?>" <?php post_class("simplecharm-portfolio-single-post m-3 p-3 simplecharm-portfolio-single-post-content"); ?>>
	<div class="post-meta">
		<h2 class="simplecharm-portfolio-single-post-title text-3xl my-1">
			<?php echo apply_filters('the_title', sanitize_text_field(get_the_title())); ?>
		</h2>
		<p class="simplecharm-portfolio-single-post-modified">
			<span>
			<?php echo __("Last Modified:- ".get_the_modified_date(),"simplecharm-portfolio"); ?> 
			</span>
		</p>
		<p>
			<span class="link-wrapper">
				<?php echo __("Author:- ".get_the_author_posts_link(),"simplecharm-portfolio"); ?>
			</span>
		</p>
	</div>
		<div class="post-content">
			<p class="my-3"><?php echo apply_filters('the_content', wp_kses_post(get_the_content())); ?></p>
		</div>
		 <?php 
            wp_link_pages(array(
                'before' => '<div class="page-links">'.esc_html__( 'Pages','simplecharm-portfolio' ).'',
                'after' => '</div>'
            ));
            ?>
		<?php if(has_tag()): ?>
			<div class="simplecharm-portfolio-single-post-tags link-wrapper">
				<?php esc_html__(the_tags()); ?>
			</div>
		<?php endif; ?>
        <div class="simplecharm-portfolio-single-post-cats link-wrapper">
        	category : <?php echo wp_kses_post(get_the_category_list(', ')); ?>
        </div>
</article>
<div class="comment-respond wp-block-post-comments-form">
    <?php comments_template(); ?>
</div>
<?php endif ?>
<?php else: ?>

<div class="simplecharm-portfolio-nopost min-h-screen grid place-items-center">
	<h2><?php esc_html_e("No Post Found","simplecharm-portfolio"); ?></h2>
</div>

<?php endif; ?>
<?php get_footer();?>