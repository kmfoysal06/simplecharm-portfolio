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
        $key = $key + 1;
      $flattern_experience = simplecharm_portfolio_flattern_array($experience);
        if(!is_array($flattern_experience) || empty($flattern_experience)) continue;
        $working_now = (array_key_exists('working',$flattern_experience)) ? $flattern_experience['working'] : 'off';
    ?>
 <tr class="flex flex-col simplecharm-basic-border simplecharm-basic-padding">
    <td>
        <label for="experience-institution-<?php echo $key; ?>">Institution</label>
        <input type="text" class="institution" placeholder="Experience Institution" name="simplecharm_portfolio[experiences][<?php echo $key; ?>][][institution]" value="<?php echo (array_key_exists("institution",$flattern_experience)) ? $flattern_experience['institution'] : '' ;?>" id="experience-institution-<?php echo $key; ?>"  data-queue="<?php echo $key; ?>">
    </td>
    <td>
        <label for="experience-post-title-<?php echo $key; ?>" title="enter your job post title eg:- Sr. Laravel Developer etc.">Post Title</label>
        <input type="text" class="post-title" placeholder="Post Title" name="simplecharm_portfolio[experiences][<?php echo $key; ?>][][post-title]" value="<?php echo (array_key_exists("post-title",$flattern_experience)) ? $flattern_experience['post-title'] : '' ;?>" id="experience-post-title-<?php echo $key; ?>" data-queue="<?php echo $key; ?>">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="responsibilities-<?php echo $key; ?>" title="enter list separated by three dash (---)
        eg:- ---first responsibility --- second responsibility ---third responsibility etc.">Responsibilities</label>
        <textarea name="simplecharm_portfolio[experiences][<?php echo $key; ?>][][responsibility]" id="responsibilities-<?php echo $key; ?>" cols="50" rows="5" class="responsibility" data-queue="<?php echo $key; ?>"><?php echo (array_key_exists("responsibility",$flattern_experience)) ? $flattern_experience['responsibility'] : '' ;?></textarea>
    </td>
    <td>
        <label for="start-date-<?php echo $key; ?>">Start Date</label>
        <input type="date" class="start_date" name="simplecharm_portfolio[experiences][<?php echo $key; ?>][][start_date]" placeholder="Start Date" id="start-date-<?php echo $key; ?>" data-queue="<?php echo $key; ?>" value="<?php echo (array_key_exists("start_date",$flattern_experience)) ? $flattern_experience['start_date'] : '' ;?>">
    </td>
    <td>
        <label for="end-date-<?php echo $key; ?>">End Date</label>
        <input type="date" class="end_date" name="simplecharm_portfolio[experiences][<?php echo $key; ?>][][end_date]" placeholder="End Date" id="end-date-<?php echo $key; ?>" data-queue="<?php echo $key; ?>" value="<?php echo (array_key_exists("end_date",$flattern_experience)) ? $flattern_experience['end_date'] : '' ;?>" <?php disabled($working_now,'on');?>>
    </td>
    <td>
        <label for="working-now-<?php echo $key; ?>" title="Are You Still Working Here?">Still Working?</label>
        <input type="checkbox" id="working-now-<?php echo $key; ?>" name="simplecharm_portfolio[experiences][<?php echo $key; ?>][][working]" class="working" data-queue="<?php echo $key; ?>" <?php checked($working_now,'on'); ?>>
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
    <tr class="simplecharm_portfolio_empty-row__experience screen-reader-text flex flex-col simplecharm-basic-border simplecharm-basic-padding">
    <td>
        <label for="experience-institution">Institution</label>
        <input type="text" class="institution" placeholder="Experience Institution" name="simplecharm_portfolio[experiences][0][institution]" value="" id="experience-institution" data-queue="0">
    </td>
    <td>
        <label for="experience-post-title" title="enter your job post title eg:- Sr. Laravel Developer etc.">Post Title</label>
        <input type="text" class="post-title" placeholder="Post Title" name="simplecharm_portfolio[experiences][0][post-title]" value="" id="experience-post-title" data-queue="0">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="responsibilities" title="enter list separated by three dash (---)
        eg:- ---first responsibility --- second responsibility ---third responsibility etc.">Responsibilities</label>
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
        <label for="working-now" title="Are You Still Working Here?">Still Working?</label>
        <input type="checkbox" id="working-now" name="simplecharm_portfolio[experiences][0][working]" class="working" data-queue="0">
    </td>
    <td>
        <a class="button simplecharm_experience_remove" href="#1">Remove</a>
    </td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_experience_add" class="button" href="#">Add another</a></p>
</div>
</div>