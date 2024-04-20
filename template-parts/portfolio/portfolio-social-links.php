<?php
/**
 * Customize  Social Links
 * @package SimpleCharm Portfolio
 */
?>
<table id="repeatable-fieldset-one" width="100%">
  <tbody>
  <?php
if (is_array($args) && array_key_exists("social_links", $args)):
            foreach ($args['social_links'] as $social):
            ?>
                                <tr class="flex">
                                  <td>
                                    <input type="text" class="name" data-queue="0" placeholder="social link name" name="simplecharm_portfolio[social_link][0][][name]" value="<?php echo $social['name']; ?>" /></td>
                                  <td>
                                    <input type="text" class="url" data-queue="0" placeholder="social link" name="simplecharm_portfolio[social_link][0][][url]" value="<?php echo $social['url']; ?>" />
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