<?php
/**
 * Basic Info
 * @package SimpleCharm Portfolio
 */
?>
<div class="hero-content flex-col lg:flex-row-reverse">
    <img src="https://daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Hi, I'm <?php echo esc_html($args['name']); ?> 👋</h1>
      <p class="py-6"><?php echo esc_html($args['short_description']); ?></p>
      <br>
      <p><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $args['address']; ?></p>
      <p><span><i class="badge <?php echo esc_html($args['available'] == 'True' ? 'badge-primary' : 'badge-error') ; ?> badge-xs"></i></span> <?php echo esc_html($args['available'] == 'True' ? '' : 'Currently Not ') ; ?>Available for New Projects</p>
      <br>
      <a href="#"><i class="fa-brands fa-github"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
      <a href="#"><i class="fa-brands fa-figma"></i></a>
    </div>
  </div>