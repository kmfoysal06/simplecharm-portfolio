<?php
/**
 * Basic Info
 * @package SimpleCharm Portfolio
 */
?>
<div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-flow-col-reverse p-4">
    <img src="<?php echo esc_url($args["user_image"]); ?>" class="max-w-sm rounded-lg shadow-2xl block m-auto" />
    <div>
      <h3 class="text-3xl font-bold">Hi, I'm <?php echo esc_html($args['name']); ?> 👋</h3>
      <p class="py-6"><?php echo esc_html($args['short_description']); ?></p>
      <br>
      <p><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $args['address']; ?></p>
      <p><span><i class="badge <?php echo esc_attr($args['available'] == 'True' ? 'badge-primary' : 'badge-error') ; ?> badge-xs"></i></span> <?php echo esc_html($args['available'] == 'True' ? '' : 'Currently Not ') ; ?>Available for New Projects</p>
      <br>
      <a href="#"><i class="fa-brands fa-github"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
      <a href="#"><i class="fa-brands fa-figma"></i></a>
    </div>
  </div>