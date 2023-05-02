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

jQuery(document).ready(function($) {
    var mediaUploader;
    $('.upload-product-images').click(function(e) {
        e.preventDefault();
        // If the uploader object has already been created, reopen the dialog
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        // Extend the wp.media object
        mediaUploader = wp.media({
            title: 'Upload Images',
            button: {
                text: 'Add to Gallery'
            },
            multiple: true
        });
        // When a file is selected, grab the URL and set it as the text field's value
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').toJSON();
            for (var i = 0; i < attachment.length; i++) {
                var image = attachment[i];
                $('.product-images-list').append('<div class="product-image-item"><img class="thumbnail" src="' + image.url + '"><input type="hidden" name="product_images[]" value="' + image.id + '"><a href="#" class="remove-product-image">Remove</a></div>');
            }
        });
        // Open the uploader dialog
        mediaUploader.open();
    });
    // Remove product image
    $('.product-images-container').on('click', '.remove-product-image', function(e) {
        e.preventDefault();
        $(this).closest('.product-image-item').remove();
    });
});
