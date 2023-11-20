jQuery(function ($) {
    // on upload button click
    $('body').on('click', '.custom-media-button-upload', function (event) {
        event.preventDefault(); // prevent default link click and page refresh

        const button = $(this);
        const mediaId = button.next().next().val();

        // Determine whether to upload an image or a PDF
        const fileType = button.parent().hasClass('pdf-upload') ? 'application/pdf' : 'image';

        const customUploader = wp.media({
            title: 'Select file', // modal window title
            library: {
                type: fileType,
            },
            button: {
                text: 'Use this file', // button label text
            },
            multiple: false
        }).on('select', function () { // it also has "open" and "close" events
            const attachment = customUploader.state().get('selection').first().toJSON();
            if (fileType === 'image') {
                button.removeClass('button').html('<img src="' + attachment.sizes.thumbnail.url + '">'); // add image instead of "Upload Image"
            } else {
                button.html('View PDF: ' + attachment.title); // add "View PDF" text along with the title
            }
            button.next().show(); // show "Remove file" link
            // Populate the hidden field with file ID
            button.siblings('.hidden-media-id').val(attachment.id);
        })

        // already selected files
        customUploader.on('open', function () {
            if (mediaId) {
                const selection = customUploader.state().get('selection');
                attachment = wp.media.attachment(mediaId);
                attachment.fetch();
                selection.add(attachment ? [attachment] : []);
            }
        })

        customUploader.open();
    });
    // on remove button click
    $('body').on('click', '.custom-media-button-remove', function (event) {
        event.preventDefault();
        const button = $(this);
        button.next().val(''); // emptying the hidden field
        if (button.prev().is('img')) {
            button.hide().prev().addClass('button').html('Upload image'); // replace the image with text
        } else {
            button.hide().prev().addClass('button').html('Select PDF'); // replace the text with "Select PDF"
        }
    });
});
