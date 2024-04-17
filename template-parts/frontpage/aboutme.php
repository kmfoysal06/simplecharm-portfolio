<?php
/**
 * About Me Section
 * @package SimpleCharm Portfolio
 */
?>
 <div class="flex flex-col">
  <div class="aboutme-title my-3 flex flex-col items-center">
    <div class="badge badge-neutral">About Me</div>
    <h3 class="text-xl">Curious about me? Here you have it:</h3>
  </div>
  <div class="hero-content flex">
        <img src="<?php echo esc_url($args["user_image2"]) ?>" width="50%"/>
    <div>
      <p class="py-6">
        <?php echo esc_html($args["description"]); ?>
      </p>
    </div>
  </div>
  </div>