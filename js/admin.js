// Add actions for product category image buttons
jQuery(document).ready(function($) {
    // Add the media uploader
    var mediaUploader;
    $('.js-upload-image').click(function(e) {
        e.preventDefault();
        // If the uploader object has already been created, reopen the dialog
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        // Extend the wp.media object
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
        // When a file is selected, grab the URL and set it as the text field's value
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            console.log(attachment.url);
            $('#product_category_image').val(attachment.url);
            // Update preview
            $('.js-image-preview').attr('src', attachment.url);
        });
        // Open the uploader dialog
        mediaUploader.open();
    });
    // Remove the image URL
    $('.js-remove-image').click(function(e) {
        e.preventDefault();
        $('#product_category_image').val('');
        // Update preview
        $('.js-image-preview').attr('src', '');
    });
});