<?php
/**
 * Basic Info Template For Frontpage
 * @package SimpleCharm Portfolio
 */
?>
<div class="grid grid-cols-1 text-center lg:text-justify lg:grid-cols-2 lg:grid-flow-col-reverse p-4">
    <img src="<?php echo esc_url($args["user_image"]); ?>" tabindex="0" class="lg:max-w-sm rounded-lg shadow-2xl block m-auto sm:w-4/5" />
    <div>
      <h3 tabindex="1" class="text-3xl font-bold mt-4"><?php echo esc_html("Hi, I'm ".$args['name'])." 👋"; ?></h3>
      <p class="py-4" tabindex="2"><?php echo esc_html($args['short_description']); ?></p>
      <br>
      <?php if(isset($args['address'])): ?>
      <p tabindex="3"><span class="dashicons dashicons-location-alt"></span> <?php echo $args['address']; ?></p>
      <?php endif;?>
      <p tabindex="4"><span><i class="badge <?php echo esc_attr($args['available'] == 'True' ? 'badge-primary' : 'badge-error') ; ?> badge-xs"></i></span> <?php echo esc_html($args['available'] == 'True' ? 'Available for New Projects' : 'Currently Not Available for New Projects') ; ?></p>
      <br>
      <?php 
        $social_links = simplecharm_portfolio_link_social_frontend($args['social_links'],5);
        $social_links;
       ?>
    </div>
  </div>