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
        <?php if(is_array($args) && array_key_exists('works', $args)): 
        // $flatten_works = ?>

        <?php endif?>
    <!-- empty hidden one for jQuery -->
    <tr class="simplecharm_portfolio_empty-row__works screen-reader-text flex  simplecharm-basic-border simplecharm-basic-padding flex flex-col">
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
        <img src="" class="project-thumbnail simplecharm_portfolio_project_thumbnail" alt="project thumbnail" width="100%">
        <label for="project-thumbnail"></label>
        <input type="hidden" class="simplecharm-portfolio-project-thumbnail" placeholder="Project Thumbnail" name="simplecharm_portfolio[works][0][thumbnail]" value="" id="project-thumbnail" data-queue="0">
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