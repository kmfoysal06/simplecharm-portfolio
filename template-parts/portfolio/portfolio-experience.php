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
        <label for="experience-institution">Institution</label>
        <input type="text" class="institution" placeholder="Experience Institution" name="simplecharm_portfolio[experiences][0][institution]" value="" id="experience-institution">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="responsibilities">Responsibilities</label>
        <textarea name="simplecharm_portfolio[experiences][0][responsibilities]" id="responsibilities" cols="50" rows="5"></textarea>
    </td>
    <td>
        <label for="start-date">Start Date</label>
        <input type="date" class="start-date" name="simplecharm_portfolio[experiences][0][start_date]" placeholder="Start Date" id="start-date">
        <label for="end-date">End Date</label>
        <input type="date" class="end-date" name="simplecharm_portfolio[experiences][0][end_date]" placeholder="End Date" id="end-date">
    </td>
    <td>
        <!-- Hidden input for "Still Working?" -->
        <input type="hidden" name="simplecharm_portfolio[experiences][0][working]" value="off">
        <label for="working-now">Still Working?</label>
        <input type="checkbox" class="working-now" id="working-now" name="simplecharm_portfolio[experiences][0][working]">
    </td>
    <td>
        <a class="button simplecharm_experience_remove" href="#1">Remove</a>
    </td>
</tr>

      <?php
endforeach;
endif;
?>

    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__experience_link screen-reader-text flex flex-col simplecharm-basic-border simplecharm-basic-padding">
    <td>
        <label for="experience-institution">Institution</label>
        <input type="text" class="institution" placeholder="Experience Institution" name="simplecharm_portfolio[experiences][0][institution]" value="" id="experience-institution">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="responsibilities">Responsibilities</label>
        <textarea name="simplecharm_portfolio[experiences][0][responsibilities]" id="responsibilities" cols="50" rows="5"></textarea>
    </td>
    <td>
        <label for="start-date">Start Date</label>
        <input type="date" class="start-date" name="simplecharm_portfolio[experiences][0][start_date]" placeholder="Start Date" id="start-date">
        <label for="end-date">End Date</label>
        <input type="date" class="end-date" name="simplecharm_portfolio[experiences][0][end_date]" placeholder="End Date" id="end-date">
    </td>
    <td>
        <!-- Hidden input for "Still Working?" -->
        <input type="hidden" name="simplecharm_portfolio[experiences][0][working]" value="off">
        <label for="working-now">Still Working?</label>
        <input type="checkbox" class="working-now" id="working-now" name="simplecharm_portfolio[experiences][0][working]">
    </td>
    <td>
        <a class="button simplecharm_experience_remove" href="#1">Remove</a>
    </td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_experience_link_add" class="button" href="#">Add another</a></p>
</div>
</div>