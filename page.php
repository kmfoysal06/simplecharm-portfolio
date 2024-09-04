<?php
/**
 *  Page Frontend
 * @package SimpleCharm Portfolio
 * @since 1.0
 *  */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
$show_heading = get_post_meta(get_the_ID(),'_simplecharm_portfolio_show_heading',true);
        ?>
<div class="post mx-3 my-10">
    <?php 
        if($show_heading == 'yes'):
    ?>
    <h2 class="text-3xl text-black"><?php echo esc_html(get_the_title()); ?></h1>
    <div class="post-meta">
        <span class="post-date text-black"><?php echo esc_html(get_the_date()); ?></span>
        <span class="post-author"><a class="underline" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo esc_html(get_the_author()); ?></a></span>
    </div>
    <?php
        endif;
?>
    <div class="post-content"><?php echo apply_filters('the_content', wp_kses_post(get_the_content())); ?></div>
</div>
<?php
    endwhile;
else:
    ?>
<p><?php echo esc_html__( "Nothing found Here", "simplecharm-portfolio" ); ?></p>
<?php
endif;
get_footer();
?>