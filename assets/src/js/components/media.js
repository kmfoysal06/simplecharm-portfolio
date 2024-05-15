/**
 * Media Uploader
 */

(function($) {
    class SimpleCharm_portfolio_Media {
        constructor() {
            this.init();
        }
        init() {
            this.mediaUploader('simplecharm-portfolio-user-image',"simplecharm_portfolio_user_image");
            this.mediaUploader('simplecharm-portfolio-user-image2',"simplecharm_portfolio_user_image2");
        }
        mediaUploader(picked_image,hidden_field) {
            let image;
                $(`.${picked_image}`).off('click').on('click', function(e) {
                e.preventDefault();
            if(!image){
                image = wp.media({
                    title: 'Upload Image',
                    multiple: false, // Set to true if you want to upload multiple files at once
                    library: {
                        type: 'image' // Only load image files
                    }
                }).open().on('select', function() {
                    // This will return the selected image from the Media Uploader, the result is an object
                    let uploaded_image = image.state().get('selection').first();
                    // Convert uploaded_image to a JSON object to make accessing it easier
                    let image_url = uploaded_image.toJSON().url;
                    // Assign the url value to the image and hidden input field
                    $(`.${picked_image}`).attr("src", image_url);
                    $(`.${hidden_field}`).val(image_url);
                });
            }
            image.open();
            });
        }
    }
    new SimpleCharm_portfolio_Media();
})(jQuery);