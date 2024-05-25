<?php
/**
 * About Me Template For Frontpage
 * @package SimpleCharm Portfolio
 */
if( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
 <div class="flex flex-col" tabindex="0">
  <div class="aboutme-title my-3 flex flex-col items-center">
    <div class="badge badge-neutral"><?php _e("About Me","simplecharm-portfolio"); ?></div>
    <h3 class="text-xl"><?php _e("Curious about me? Here you have it:","simplecharm-portfolio"); ?></h3>
  </div>
  <div class="hero-content flex-col sm:flex-col md:flex-row lg:flex-row justify-center sm:justify-between md:justify-between lg:justify-between">
        <img src="<?php echo esc_url($args["user_image2"]) ?>" class="sm:w-full md:w-2/4 lg:w-2/4" />
    <div>
      <p class="py-6">
        <?php echo esc_html($args["description"]); ?>
      </p>
    </div>
  </div>
  </div>