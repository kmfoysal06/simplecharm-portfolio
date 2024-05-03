<?php
/**
 * Basic Info
 * @package SimpleCharm Portfolio
 */
?>
<div class="grid grid-cols-1 text-center lg:text-justify lg:grid-cols-2 lg:grid-flow-col-reverse p-4">
    <img src="<?php echo esc_url($args["user_image"]); ?>" class="lg:max-w-sm rounded-lg shadow-2xl block m-auto sm:w-4/5" />
    <div>
      <h3 class="text-3xl font-bold mt-4">Hi, I'm <?php echo esc_html($args['name']); ?> 👋</h3>
      <p class="py-4"><?php echo esc_html($args['short_description']); ?></p>
      <br>
      <p><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $args['address']; ?></p>
      <p><span><i class="badge <?php echo esc_attr($args['available'] == 'True' ? 'badge-primary' : 'badge-error') ; ?> badge-xs"></i></span> <?php echo esc_html($args['available'] == 'True' ? '' : 'Currently Not ') ; ?>Available for New Projects</p>
      <br>
      <?php 
        $social_links = simplecharm_portfolio_link_social_frontend($args['social_links']);
        $social_links;
       ?>
    </div>
  </div>