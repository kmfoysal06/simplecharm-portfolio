<?php
/**
 * Customize  Experience
 * @package SimpleCharm Portfolio
 */
?>
<!-- experience setting -->
<div class="portfolio-section-wrapper">
  <h3 class="portfolio-section-toggle">Experience Customization</h3>
<div class="portfolio-section-content simplecharm-portfolio-experience">
    <table id="repeatable-fieldset-two" width="100%">
      <tbody>
  <?php
if (is_array($args) && array_key_exists("experience", $args)):
    foreach ($args['experience'] as $experience):
    ?>
          <tr class="flex">
            <td>
              <input type="text" class="name" data-queue="0" placeholder="experience Name" name="simplecharm_portfolio[experience][0][][name]" value="<?php echo $experience; ?>" /></td>
            <td><a class="button simplecharm_experience_remove" href="#1">Remove</a></td>
          </tr>
      <?php
endforeach;
endif;
?>

    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__experience_link screen-reader-text flex">
      <td>
          <input type="text" class="name" data-queue="0" placeholder="experience Name" name="simplecharm_portfolio[experience][0][][name]" value="<?php echo $experience; ?>" /></td>
          <td><a class="button simplecharm_experience_remove" href="#1">Remove</a></td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_experience_link_add" class="button" href="#">Add another</a></p>
</div>
</div>