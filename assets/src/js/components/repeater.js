jQuery(document).ready(function(){
    jQuery("#kmf-cpr-data-add-fields").click(function(){
        let form = jQuery("#kmf-cpr-data-copy-hidden-container").clone(true, true);
        form.show();
        form.removeAttr("id");
        jQuery(".kmf-cpr-visibal-data-container").append(form);
        // let item = '<h2> hello world </h2> ';
        // jQuery(".kmf-cpr-data-container form").append(item);
        console.log("clicked");
    });
    jQuery(".kmf-cpr-data-title-bar").click(function(){
        jQuery(this).next().slideToggle();
    });
    jQuery(".kmf-cpr-data-title-bar .close").click(function(){
        jQuery(this).parent().parent().slideUp();
    });
});