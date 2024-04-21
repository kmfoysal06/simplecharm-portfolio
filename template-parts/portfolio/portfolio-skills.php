<?php
/**
 * Customize  Skills 
 * @package SimpleCharm Portfolio
 */
?>
<!-- skills setting -->
<div class="portfolio-section-wrapper">
	<h3 class="portfolio-section-toggle">Skills Customization</h3>
<div class="portfolio-section-content simplecharm-portfolio-skills">
    <table id="repeatable-fieldset-one" width="100%">
      <tbody>
	<?php
if (is_array($args) && array_key_exists("skills", $args)):
        foreach ($args['skills'] as $skill):
        ?>
        <tr class="flex">
          <td>
            <input type="text" class="name" data-queue="0" placeholder="Skill Name" name="simplecharm_portfolio[skills][0][][name]" value="<?php echo $skill; ?>" /></td>
          <td><a class="button simplecharm_skills_remove" href="#1">Remove</a></td>
        </tr>
    <?php
endforeach;
        endif;
        ?>

    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__skills_link screen-reader-text flex">
	    <td>
	    <input type="text" class="name" data-queue="0" placeholder="Skill Name" name="simplecharm_portfolio[skills][0][][name]" value="" />
	    </td>
	    <td><a class="button simplecharm_skills_remove" href="#1">Remove</a></td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_skill_link_add" class="button" href="#">Add another</a></p>
</div>
</div>