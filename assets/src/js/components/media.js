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
            $(`.${picked_image}`).click(function(e) {
                e.preventDefault();
                var image = wp.media({
                    title: 'Upload Image',
                    // mutiple: true if you want to upload multiple files at once
                    multiple: false,
                    // only load image files
                    library: {
                        type: 'image'
                    },
                }).open().on('select', function(e) {
                    // This will return the selected image from the Media Uploader, the result is an object
                    var uploaded_image = image.state().get('selection').first();
                    // We convert uploaded_image to a JSON object to make accessing it easier
                    var image_url = uploaded_image.toJSON().url;
                    // Let's assign the url value to the input field
                    $(`.${picked_image}`).attr("src", image_url);
                    $(`.${hidden_field}`).val(image_url);
                });
            });
        }
    }
    new SimpleCharm_portfolio_Media();
})(jQuery);