/**
 * Repeater Controll
 */
(function($) {
    class Repeater {
        constructor() {
            this.init();
        }
        init() {
            this.handleRepeater("simplecharm_social_link_add", ['simplecharm_portfolio_empty-row__social_link', 'screen-reader-text'], '#repeatable-fieldset-one tbody>tr', 'simplecharm_social_link_remove','social_link');
            this.handleRepeater("simplecharm_skill_link_add", ['simplecharm_portfolio_empty-row__skills_link', 'screen-reader-text'], '#repeatable-fieldset-one tbody>tr', 'simplecharm_skills_remove','skills');
            this.handleRepeater("simplecharm_experience_link_add", ['simplecharm_portfolio_empty-row__experience_link', 'screen-reader-text'], '#repeatable-fieldset-two tbody>tr', 'simplecharm_experience_remove','experiences');
        }
        handleRepeater(addBtn, hiddenFields, insertBefore, removeBtn, dataName) {
            let queue = $(`${ insertBefore }:nth-last-child(2) input`).data("queue");
            $(`#${addBtn}`).on('click', function() {
                queue++;
                queue = isNaN(queue) ? 1 : queue ;
                let row = $(`.${hiddenFields.join(".")}`).clone(true);
                let newInputs = row.find('input, textarea');
                newInputs.each(function() {
                    $(this).attr('data-queue', queue);
                    let name = $(this).attr('name');
                    let inputType = $(this)[0].className;
                    $(this).attr('name', `simplecharm_portfolio[${dataName}][${queue}][][${inputType}]`);
                    let inputId = $(this).attr("id");
                    let LabelFor = $(this).siblings('label').attr('for');
                    console.log(queue)
                    $(this).attr("id",`${inputId}-${queue}`);
                    $(this).siblings('label').attr("for",`${LabelFor}-${queue}`);
                });
                row.removeClass(hiddenFields.join(" "));
                row.insertBefore(`${insertBefore}:last-child`);
                return false;
            });
            $(`.${removeBtn}`).on('click', function() {
                $(this).parents('tr').remove();
                return false;
            });
        }
    }
    new Repeater();
})(jQuery)