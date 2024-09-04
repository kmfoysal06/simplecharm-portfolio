<?php
/**
 *  Author Page Template
 * @package SimpleCharm Portfolio
 * @since 1.0
 *  */
if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
get_header();
?>
<div class="proflie-meta grid place-items-center">
<?php
if (have_posts()) :
    $author_id = get_the_author_meta('ID');
    echo '<h1 class="text-center text-2xl uppercase">' . esc_html(get_the_author()) . '</h1>';
    echo '<p class="text-center">' . get_avatar($author_id, 150) . '</p>';
    if (is_user_logged_in() && get_current_user_id() == $author_id) {
        echo '<p class="text-center underline simplecharm-portfolio-edit-profile-btn border px-3 py-2 my-2"><a href="' . esc_url(get_edit_user_link()) . '">Edit Profile</a></p>';
    }
?>
    </div>
    <div class="posts-by m-2">
    <?php
    echo '<br>';
    echo '<h1 class="text-center text-xl">Posts by ' . esc_html(get_the_author()) . '</h1>';
    echo '<div class="simplecharm-portfolio-posts">';
    while (have_posts()) : the_post();
        ?>
<div id="post-<?php the_ID(); ?>" <?php post_class("simplecharm-portfolio-content my-4"); ?>>
    <h3 class="post-title text-2xl"><a
            href="<?php echo esc_url(get_the_permalink()); ?>" class="underline"><?php echo esc_html(get_the_title()); ?></a></h3>
    <div class="post-meta">
        <span class="post-date">
            <?php if(empty(get_the_title())): ?>
                <a href="<?php echo esc_url(get_the_permalink()); ?>" class="underline">
            <?php endif; ?>
                <?php echo esc_html(get_the_date()); ?>
            <?php if(empty(get_the_title())): ?>
                </a>
            <?php endif; ?>
        </span>
    </div>
    <div class="post-content"><?php echo esc_html(get_the_excerpt()); ?></div>
</div>
<?php
    endwhile;
?> 
</div> 
<?php
    the_posts_navigation();
    echo '</div>';
else:
    ?>
<p class="text-center"><?php esc_html_e('No posts by this author.', 'simplecharm-portfolio'); ?></p>
<?php
endif;

get_footer();
?>