<?php
/**
 * Customize  Social Links
 * @package SimpleCharm Portfolio
 */
?>
<div class="portfolio-section-wrapper">
    <h3 class="portfolio-section-toggle"><?php _e("Social Links","simplecharm-portfolio"); ?></h3>
<div class="portfolio-section-content">
<table id="repeatable-fieldset-one" width="100%">
  <tbody>
  <?php
if (is_array($args) && array_key_exists("social_links", $args)):
            foreach ($args['social_links'] as $key => $social):
            ?>
              <tr class="flex">
                <td>
                  <label for="social_link-name-<?php esc_html($key,"simplecharm-portfolio"); ?>"></label>
                  <input type="text" class="name" data-queue="0" placeholder="social link name" name="simplecharm_portfolio[social_link][0][][name]" value="<?php echo is_array($social['name']) ? implode('', $social['url']) : $social['name']  ?>" id="social_link-name-<?php esc_html($key,"simplecharm-portfolio"); ?>" /></td>
                <td>
                  <label for="social_link-url-<?php esc_html($key,"simplecharm-portfolio"); ?>"></label>
                  <input type="text" class="url" data-queue="0" placeholder="social link" name="simplecharm_portfolio[social_link][0][][url]" value="<?php echo is_array($social['url']) ? implode('', $social['url']) : $social['url']  ?>" id="social_link-url-<?php esc_html($key,"simplecharm-portfolio"); ?>" />
                </td>
                <td><a class="button simplecharm_social_link_remove" href="#1">Remove</a></td>
              </tr>
              <?php
    endforeach;
        endif;
        ?>

    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__social_link screen-reader-text flex">
           <td>
            <input type="text" class="name" data-queue="0" placeholder="social link name" name="simplecharm_portfolio[social_link][0][][name]" value="" /></td>
          <td>
            <input type="text" class="url" data-queue="0" placeholder="social link" name="simplecharm_portfolio[social_link][0][][url]" value="" />
          </td>
          <td><a class="button simplecharm_social_link_remove" href="#">Remove</a></td>
        </tr>
  </tbody>
</table>
<p><a id="simplecharm_social_link_add" class="button" href="#">Add another</a></p>
</div>
</div>