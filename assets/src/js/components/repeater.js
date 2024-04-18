(function($) {
    class Repeater {
        constructor() {
            this.init();
        }
        init() {
            this.handleRepeater("simplecharm_social_link_add", ['simplecharm_portfolio_empty-row__social_link', 'screen-reader-text'], '#repeatable-fieldset-one tbody>tr:last-child', 'simplecharm_social_link_remove');
        }
        handleRepeater(addBtn, hiddenFields, insertBefore, removeBtn) {
            let queue = $(`${ insertBefore } input[type=text]`).data("queue");
            $(`#${addBtn}`).on('click', function() {
                let row = $(`.${hiddenFields.join(".")}`).clone(true);
                let newInputs = row.find('input');
                queue++;
                newInputs.each(function() {
                    let name = $(this).attr('name');
                    let inputType = $(this)[0].className;
                    $(this).attr('name', `simplecharm_portfolio[social_link][${queue}][${inputType}][]`);
                    $(this).data('queue', queue);
                    // console.log(queue);
                });
                row.removeClass(hiddenFields.join(" "));
                row.insertBefore(insertBefore);
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