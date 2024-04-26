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
if (is_array($args) && array_key_exists("experiences", $args)):
    foreach ($args['experiences'] as $key => $experience):
      $flatter_experience = simplecharm_portfolio_flatter_array($experience);
        if(!is_array($flatter_experience) || empty($flatter_experience)) continue;
        $working_now = (array_key_exists('working',$flatter_experience)) ? $flatter_experience['working'] : 'off';
    ?>
 <tr class="flex flex-col simplecharm-basic-border simplecharm-basic-padding">
    <td>
        <label for="experience-institution-<?php echo $key; ?>">Institution</label>
        <input type="text" class="institution" placeholder="Experience Institution" name="simplecharm_portfolio[experiences][0][institution]" value="<?php echo (array_key_exists("institution",$flatter_experience)) ? $flatter_experience['institution'] : '' ;?>" id="experience-institution-<?php echo $key; ?>" class="institution" data-queue="0">
    </td>
    <td>
        <label for="experience-post-title-<?php echo $key; ?>" title="enter your job post title eg:- Sr. Laravel Developer etc.">Post Title</label>
        <input type="text" class="post-title" placeholder="Post Title" name="simplecharm_portfolio[experiences][0][post-title]" value="<?php echo (array_key_exists("post-title",$flatter_experience)) ? $flatter_experience['post-title'] : '' ;?>" id="experience-post-title-<?php echo $key; ?>" data-queue="0">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="responsibilities-<?php echo $key; ?>">Responsibilities</label>
        <textarea name="simplecharm_portfolio[experiences][0][responsibility]" id="responsibilities-<?php echo $key; ?>" cols="50" rows="5" class="responsibility" data-queue="0"><?php echo (array_key_exists("responsibility",$flatter_experience)) ? $flatter_experience['responsibility'] : '' ;?></textarea>
    </td>
    <td>
        <label for="start-date-<?php echo $key; ?>">Start Date</label>
        <input type="date" class="start_date" name="simplecharm_portfolio[experiences][0][start_date]" placeholder="Start Date" id="start-date-<?php echo $key; ?>" data-queue="0" value="<?php echo (array_key_exists("start_date",$flatter_experience)) ? $flatter_experience['start_date'] : '' ;?>">
    </td>
    <td>
        <label for="end-date-<?php echo $key; ?>">End Date</label>
        <input type="date" class="end_date" name="simplecharm_portfolio[experiences][0][end_date]" placeholder="End Date" id="end-date-<?php echo $key; ?>" data-queue="0" value="<?php echo (array_key_exists("end_date",$flatter_experience)) ? $flatter_experience['end_date'] : '' ;?>" <?php disabled($working_now,'on');?>>
    </td>
    <td>
        <label for="working-now-<?php echo $key; ?>">Still Working?</label>
        <input type="checkbox" id="working-now-<?php echo $key; ?>" name="simplecharm_portfolio[experiences][0][working]" class="working" data-queue="0" <?php checked($working_now,'on'); ?>>
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
        <input type="text" class="institution" placeholder="Experience Institution" name="simplecharm_portfolio[experiences][0][institution]" value="" id="experience-institution" class="institution" data-queue="0">
    </td>
    <td>
        <label for="experience-post-title" title="enter your job post title eg:- Sr. Laravel Developer etc.">Post Title</label>
        <input type="text" class="post-title" placeholder="Post Title" name="simplecharm_portfolio[experiences][0][post-title]" value="" id="experience-post-title" data-queue="0">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="responsibilities">Responsibilities</label>
        <textarea name="simplecharm_portfolio[experiences][0][responsibility]" id="responsibilities" cols="50" rows="5" class="responsibility" data-queue="0"></textarea>
    </td>
    <td>
        <label for="start-date">Start Date</label>
        <input type="date" class="start_date" name="simplecharm_portfolio[experiences][0][start_date]" placeholder="Start Date" id="start-date" data-queue="0">
    </td>
    <td>
        <label for="end-date">End Date</label>
        <input type="date" class="end_date" name="simplecharm_portfolio[experiences][0][end_date]" placeholder="End Date" id="end-date" data-queue="0">
    </td>
    <td>
        <label for="working-now">Still Working?</label>
        <input type="checkbox" id="working-now" name="simplecharm_portfolio[experiences][0][working]" class="working" data-queue="0">
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