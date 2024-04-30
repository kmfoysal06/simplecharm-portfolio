<?php
/**
 * Customize  Project Showcase
 * @package SimpleCharm Portfolio
 */
?>
<!-- project list setting -->
<div class="portfolio-section-wrapper">
  <h3 class="portfolio-section-toggle">Projects Customization</h3>
<div class="portfolio-section-content simplecharm-portfolio-projects">
    <table id="repeatable-fieldset-three" width="100%">
      <tbody>
        <pre>
        <?php if(is_array($args) && array_key_exists('works', $args)): 
        $flattern_works = simplecharm_portfolio_load_works($args['works']); ?>
        <?php foreach( $flattern_works as $key => $work ):
            $key = $key + 1;
        if(empty($work['title'])) continue; ?>
    <tr class="flex simplecharm-basic-border simplecharm-basic-padding flex flex-col">
        <td>
            <label for="project-title-<?php echo $key; ?>">Title</label>
            <input type="text" class="title" placeholder="Project Title" name="simplecharm_portfolio[works][<?php echo $key; ?>][title]" value="<?php echo esc_attr($work['title']); ?>" id="project-title-<?php echo $key; ?>" data-queue="0">
        </td>
        <td>
            <label for="project-description-<?php echo $key; ?>">Description</label>
            <textarea class="description" placeholder="Project Description" name="simplecharm_portfolio[works][<?php echo $key; ?>][description]" id="project-description-<?php echo $key; ?>" data-queue="0" cols="50" rows="5"><?php echo esc_html($work['description']); ?></textarea>
        </td>
        <td>
            <label for="project-tags-<?php echo $key; ?>">Tags</label>
            <textarea class="tags" placeholder="Project Tags" name="simplecharm_portfolio[works][<?php echo $key; ?>][tags]" id="project-tags-<?php echo $key; ?>" data-queue="0" cols="50" rows="5"><?php echo esc_html($work['tags']); ?></textarea>
        </td>
         <td>
            <label for="project-link-<?php echo $key; ?>">Live Link</label>
            <input type="text" class="link" placeholder="Project Live Link" name="simplecharm_portfolio[works][<?php echo $key; ?>][link]" value="<?php echo esc_url($work['link']); ?>" id="project-link-<?php echo $key; ?>" data-queue="0">
        </td>
        <td>
            <a class="button simplecharm_project_remove" href="#1">Remove</a>
        </td>
        </tr>
        <?php endforeach; ?>
        <?php endif?>
    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__works screen-reader-text flex simplecharm-basic-border simplecharm-basic-padding flex flex-col">
    <td>
        <label for="project-title">Title</label>
        <input type="text" class="title" placeholder="Project Title" name="simplecharm_portfolio[works][0][title]" value="" id="project-title" data-queue="0">
    </td>
    <td>
        <label for="project-description">Description</label>
        <textarea class="description" placeholder="Project Description" name="simplecharm_portfolio[works][0][description]" value="" id="project-description" data-queue="0" cols="50" rows="5"></textarea>
    </td>
    <td>
        <label for="project-tags">Tags</label>
        <textarea class="tags" placeholder="Project Tags" name="simplecharm_portfolio[works][0][tags]" value="" id="project-tags" data-queue="0" cols="50" rows="5"></textarea>
    </td>
     <td>
        <label for="project-link">Live Link</label>
        <input type="text" class="link" placeholder="Project Live Link" name="simplecharm_portfolio[works][0][link]" value="" id="project-link" data-queue="0">
    </td>
    <td>
        <a class="button simplecharm_project_remove" href="#1">Remove</a>
    </td>
    </tr>
  </tbody>
</table>
<p><a id="simplecharm_work_add" class="button" href="#">Add another</a></p>
</div>
</div>