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
              <input type="text" class="title" data-queue="0" placeholder="Experience Title" name="simplecharm_portfolio[experience][0][][title]" value="<?php// echo $experience; ?>" /></td>
              <td>
                <input type="text" class="responsibility" data-queue="0" placeholder="simplecharm_portfolio[experience][0][][responsibility]">
              </td>
              <td>
                <input type="text" class="start-date" data-queue="0" placeholder="simplecharm_portfolio[experience][0][][start_date]">
                <input type="text" class="end-date" data-queue="0" placeholder="simplecharm_portfolio[experience][0][][end_date]">
              </td>
            <td><a class="button simplecharm_experience_remove" href="#1">Remove</a></td>
          </tr>
      <?php
endforeach;
endif;
?>

    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__experience_link screen-reader-text flex flex-col">
      <td>
              <input type="text" class="title" data-queue="0" placeholder="Experience Title" name="simplecharm_portfolio[experience][0][][title]" value="" /></td>
              <td class="responsibilities" id="repeatable-fieldset-three">
                <div class="inputs">
                  <div>
                    <input type="text" class="responsibility" data-queue="0" name="simplecharm_portfolio[experience][0][][responsibility]" placeholder="Responsibilities">
                  <a class="button simplecharm_experience_responsibility_remove" href="#1">Remove</a>
                  </div>
                </div>
                <p><a id="simplecharm_experience_responsibility_add" class="button" href="#">Add</a></p>

                <!-- Hidden Fileds For Jquery -->
                <div class="simplecharm_portfolio_empty-row__responsibilities screen-reader-text">
                  <input type="text" class="responsibility" data-queue="0" name="simplecharm_portfolio[experience][0][][responsibility]" placeholder="Responsibilities">
                  <a class="button simplecharm_responsibility_remove" href="#1">Remove</a>
                </div>
              </td>
              <td>
                <input type="date" class="start-date" data-queue="0" name="simplecharm_portfolio[experience][0][][start_date]" placeholder="Start Date">
                <input type="date" class="end-date" data-queue="0" name="simplecharm_portfolio[experience][0][][end_date]" placeholder="End Date">
              </td>
              <td>
                <label for="working-now">Still Working?</label>
                <input type="checkbox" class="working-now" id="working-now" name="simplecharm_portfolio[experience][0][][working]">
              </td>
            <td><a class="button simplecharm_experience_remove" href="#1">Remove</a></td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_experience_link_add" class="button" href="#">Add another</a></p>
</div>
</div>