<?php
/**
 * Customize  Skills 
 * @package SimpleCharm Portfolio
 */
?>
<!-- skills setting -->
<label for="show_skills">Show Skills Section</label>
<input type="checkbox" name="simplecharm_portfolio[show_skills]" id="show_skills">
<div class="simplecharm-portfolio-skills">
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