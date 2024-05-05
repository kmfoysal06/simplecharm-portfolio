<?php
/**
 * Customize  Skills 
 * @package SimpleCharm Portfolio
 */
?>
<!-- skills setting -->
<div class="portfolio-section-wrapper">
	<h3 class="portfolio-section-toggle"><?php _e("Skills Customization","simplecharm-portfolio"); ?></h3>
<div class="portfolio-section-content simplecharm-portfolio-skills">
    <table id="repeatable-fieldset-one" width="100%">
      <tbody>
	<?php
if (is_array($args) && array_key_exists("skills", $args)):
        foreach ($args['skills'] as $key => $skill):
        ?>
        <tr class="flex">
          <td>
            <label for="skill-name-<?php esc_html($key,"simplecharm-portfolio"); ?>"></label>
            <input type="text" class="name" data-queue="<?php esc_html($key,"simplecharm-portfolio"); ?>" placeholder="<?php _e("Skill Name","simplecharm-portfolio"); ?>" name="simplecharm_portfolio[skills][<?php esc_html($key,"simplecharm-portfolio"); ?>][][name]" value="<?php echo $skill; ?>" id="skill-name-<?php esc_html($key,"simplecharm-portfolio"); ?>" /></td>
          <td><a class="button simplecharm_skills_remove" href="#1"><?php _e("Remove","simplecharm-portfolio"); ?></a></td>
        </tr>
    <?php
endforeach;
        endif;
        ?>

    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__skills_link screen-reader-text flex">
	    <td>
        <label for="skill-name"></label>
	    <input type="text" class="name" data-queue="0" placeholder="<?php _e("Skill Name","simplecharm-portfolio"); ?>" name="simplecharm_portfolio[skills][0][][name]" value="" id="skill-name" />
	    </td>
	    <td><a class="button simplecharm_skills_remove" href="#1"><?php _e("Remove","simplecharm-portfolio"); ?></a></td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_skill_link_add" class="button" href="#"><?php _e("Add Another","simplecharm-portfolio"); ?></a></p>
</div>
</div>