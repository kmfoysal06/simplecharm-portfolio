<?php
/**
 * Single Page Template
 * @package SimpleCharm Portfolio
 */
get_header();
?>
<?php if(have_posts()): the_post(); ?>
	<?php if(post_password_required()):
		echo get_the_password_form();
	else:
	?>
<article id="post-<?php the_ID(); ?>" <?php post_class("simplecharm-portfolio-single-post m-3 p-3"); ?>>
	<h2 class="simplecharm-portfolio-single-post-title text-2xl">
		<?php echo apply_filters('the_title', sanitize_text_field(get_the_title())); ?>
	</h2>
	<div class="simplecharm-portfolio-single-post-content">
		<p class="simplecharm-portfolio-single-post-modified">
			<span>
			<?php esc_html__("Last Modified:-","simplecharm-portfolio"); ?> 
			<?php esc_html__(the_modified_date(),"simplecharm-portfolio"); ?></span>
		</p>
		<p>
			<span>
				<?php echo esc_html__("Author:-","simplecharm-portfolio"); ?>
				<?php esc_html__(the_author_posts_link(),"simplecharm-portfolio"); ?>
			</span>
		</p>
		<p><?php echo apply_filters('the_content', wp_kses_post(get_the_content())); ?></p>
		 <?php 
            wp_link_pages(array(
                'before' => '<div class="page-links">'.esc_html__( 'Pages','simplecharm-portfolio' ).'',
                'after' => '</div>'
            ));
            ?>
		<?php if(has_tag()): ?>
			<div class="simplecharm-portfolio-single-post-tags">
				<?php esc_html__(the_tags()); ?>
			</div>
		<?php endif; ?>
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