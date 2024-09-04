<?php
/**
 *  Search Page Frontend Template
 * @package SimpleCharm Portfolio
 * @since 1.0
 *  */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header();
?>
    <div class="simplecharm-portfolio-form">
        <?php get_search_form(); ?>
    </div>
<?php
if (have_posts()) :
        ?><section class="simplecharm-portfolio-blogs grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 m-3"><?php
    while (have_posts()) : the_post();
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

<?php
    endwhile;
    ?>
    </section>
    <?php
    the_posts_navigation();
else:
    ?>
<p class="simplecharm-text-center min-h-screen flex justify-center items-center">
    <?php echo esc_html( sprintf( __( 'No search results found for "%s"', 'simplecharm-portfolio' ), get_search_query() ) ); ?>
</p>

<?php
endif;

get_footer();
?>