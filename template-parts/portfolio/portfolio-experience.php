<?php
/**
 * Customize  Experience
 * @package SimpleCharm Portfolio
 */
?>
<!-- experience setting -->
<div class="portfolio-section-wrapper">
  <h3 class="portfolio-section-toggle"><?php _e("Experience Customization",'simplecharm-portfolio'); ?></h3>
<div class="portfolio-section-content simplecharm-portfolio-experience">
    <table id="repeatable-fieldset-two" width="100%">
      <tbody>
  <?php
  // echo '<pre>';
  // echo var_dump(simplecharm_portfolio_load_experience($args['experiences']));
  // die();
if (is_array($args) && array_key_exists("experiences", $args)):
    foreach ($args['experiences'] as $key => $experience):
        $key = $key + 1;
      $flattern_experience = simplecharm_portfolio_flattern_array($experience);
        if(!is_array($flattern_experience) || empty($flattern_experience)) continue;
        $working_now = (array_key_exists('working',$flattern_experience)) ? $flattern_experience['working'] : 'off';
    ?>
 <tr class="flex flex-col simplecharm-basic-border simplecharm-basic-padding">
    <td>
        <label for="<?php echo esc_attr("experience-institution-" . $key,'simplecharm-portfolio'); ?>"><?php _e("Institution",'simplecharm-portfolio'); ?></label>
        <input type="text" class="institution" placeholder="Experience Institution" name="simplecharm_portfolio[experiences][<?php echo esc_attr($key); ?>][][institution]" value="<?php echo (array_key_exists("institution",$flattern_experience)) ? esc_attr($flattern_experience['institution']) : "" ;?>" id="experience-institution-<?php echo esc_attr($key); ?>"  data-queue="<?php echo esc_attr($key); ?>">
    </td>
    <td>
        <label for="<?php echo esc_attr("experience-post-title-" . $key); ?>" title="<?php _e("enter your job post title eg:- Sr. Laravel Developer etc.","simplecharm-portfolio"); ?>"><?php _e("Post Title","simplecharm-portfolio"); ?></label>
        <input type="text" class="post-title" placeholder="<?php _e('Post Title','simplecharm-portfolio'); ?>" name="simplecharm_portfolio[experiences][<?php echo esc_attr($key); ?>][][post-title]" value="<?php echo (array_key_exists("post-title",$flattern_experience)) ? esc_attr($flattern_experience['post-title']) : '' ;?>" id="<?php echo esc_attr("experience-post-title-" . $key,'simplecharm-portfolio'); ?>" data-queue="<?php echo esc_attr($key); ?>">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="<?php echo esc_attr("responsibilities-" . $key); ?>" title="<?php _e('enter list separated by three dash (---) eg:- ---first responsibility --- second responsibility ---third responsibility etc.','simplecharm-portfolio'); ?>"><?php _e('Responsibilities','simplecharm-portfolio'); ?></label>
        <textarea name="simplecharm_portfolio[experiences][<?php echo esc_attr($key,'simplecharm-portfolio'); ?>][][responsibility]" id="<?php echo esc_attr("responsibilities-" . $key); ?>" cols="50" rows="5" class="responsibility" data-queue="<?php echo esc_attr($key); ?>"><?php echo esc_textarea((array_key_exists("responsibility",$flattern_experience)) ? $flattern_experience['responsibility'] : '') ;?></textarea>
    </td>
    <td>
        <label for="<?php echo esc_attr("start-date-" . $key); ?>"><?php _e("Start Date",'simplecharm-portfolio'); ?></label>
        <input type="date" class="start_date" name="simplecharm_portfolio[experiences][<?php echo esc_attr($key); ?>][][start_date]" placeholder="<?php _e("Start Date",'simplecharm-portfolio'); ?>" id="<?php echo esc_attr("start-date-" . $key); ?>" data-queue="<?php echo esc_attr($key); ?>" value="<?php echo (array_key_exists("start_date",$flattern_experience)) ? esc_attr($flattern_experience['start_date']) : '' ;?>">
    </td>
    <td>
        <label for="<?php echo esc_attr("end-date-" . $key); ?>"><?php _e("End Date",'simplecharm-portfolio'); ?></label>
        <input type="date" class="end_date" name="simplecharm_portfolio[experiences][<?php echo esc_attr($key); ?>][][end_date]" placeholder="<?php _e("End Date",'simplecharm-portfolio'); ?>" id="<?php esc_attr_("end-date-" . $key); ?>" data-queue="<?php echo esc_attr($key); ?>" value="<?php echo (array_key_exists("end_date",$flattern_experience)) ? esc_attr($flattern_experience['end_date']) : '' ;?>" <?php disabled($working_now,'on');?>>
    </td>
    <td>
        <label for="<?php echo esc_attr("working-now-" . $key,'simplecharm-portfolio'); ?>" title="<?php _e("Are You Still Working Here?",'simplecharm-portfolio'); ?>"><?php _e("Still Working?",'simplecharm-portfolio'); ?></label>
        <input type="checkbox" id="<?php echo esc_attr("working-now-" . $key); ?>" name="simplecharm_portfolio[experiences][<?php echo esc_attr($key); ?>][][working]" class="working" data-queue="<?php echo esc_attr($key); ?>" <?php checked($working_now,'on'); ?>>
    </td>
    <td>
        <a class="button simplecharm_experience_remove" href="#1"><?php _e('Remove','simplecharm-portfolio'); ?></a>
    </td>
</tr>

      <?php
endforeach;
endif;
?>

    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__experience screen-reader-text flex flex-col simplecharm-basic-border simplecharm-basic-padding">
    <td>
        <label for="experience-institution"><?php _e("institution",'simplecharm-portfolio'); ?></label>
        <input type="text" class="institution" placeholder="<?php _e("Experience institution",'simplecharm-portfolio'); ?>" name="simplecharm_portfolio[experiences][0][institution]" value="" id="experience-institution" data-queue="0">
    </td>
    <td>
        <label for="experience-post-title" title="<?php _e('enter your job post title eg:- Sr. Laravel Developer etc.','simplecharm-portfolio'); ?>"><?php _e("Post Title",'simplecharm-portfolio'); ?></label>
        <input type="text" class="post-title" placeholder="<?php _e("Post Title",'simplecharm-portfolio'); ?>" name="simplecharm_portfolio[experiences][0][post-title]" value="" id="experience-post-title" data-queue="0">
    </td>
    <td class="responsibilities" id="repeatable-fieldset-three">
        <label for="responsibilities" title="<?php _e('enter list separated by three dash (---) eg:- ---first responsibility --- second responsibility ---third responsibility etc.','simplecharm-portfolio'); ?>"><?php _e("Responsibilities",'simplecharm-portfolio'); ?></label>
        <textarea name="simplecharm_portfolio[experiences][0][responsibility]" id="responsibilities" cols="50" rows="5" class="responsibility" data-queue="0"></textarea>
    </td>
    <td>
        <label for="start-date"><?php _e('Start Date','simplecharm-portfolio'); ?></label>
        <input type="date" class="start_date" name="simplecharm_portfolio[experiences][0][start_date]" placeholder="<?php _e('Start Date','simplecharm-portfolio'); ?>" id="start-date" data-queue="0">
    </td>
    <td>
        <label for="end-date"><?php _e('End Date','simplecharm-portfolio'); ?></label>
        <input type="date" class="end_date" name="simplecharm_portfolio[experiences][0][end_date]" placeholder="<?php _e('End Date','simplecharm-portfolio'); ?>" id="end-date" data-queue="0">
    </td>
    <td>
        <label for="working-now" title="?<?php _e('Are You Still Working Here','simplecharm-portfolio'); ?>"><?php _e('Still Working?','simplecharm-portfolio'); ?></label>
        <input type="checkbox" id="working-now" name="simplecharm_portfolio[experiences][0][working]" class="working" data-queue="0">
    </td>
    <td>
        <a class="button simplecharm_experience_remove" href="#1"><?php _e('Remove','simplecharm-portfolio'); ?></a>
    </td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_experience_add" class="button" href="#"><?php _e('Add Another','simplecharm-portfolio'); ?></a></p>
</div>
</div>