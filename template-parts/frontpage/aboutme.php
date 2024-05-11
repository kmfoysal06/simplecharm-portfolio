<?php
/**
 * About Me Section
 * @package SimpleCharm Portfolio
 */
?>
 <div class="flex flex-col">
  <div class="aboutme-title my-3 flex flex-col items-center">
    <div class="badge badge-neutral" tabindex="5"><?php _e("About Me","simplecharm-portfolio"); ?></div>
    <h3 class="text-xl" tabindex="6"><?php _e("Curious about me? Here you have it:","simplecharm-portfolio"); ?></h3>
  </div>
  <div class="hero-content flex-col md:flex-row">
        <img src="<?php echo esc_url($args["user_image2"]) ?>" class="sm:w-full md:w-2/4 lg:w-2/4" tabindex="7" />
    <div>
      <p class="py-6" tabindex="8">
        <?php echo esc_html($args["description"]); ?>
      </p>
    </div>
  </div>
  </div>