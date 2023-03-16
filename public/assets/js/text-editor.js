$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    $('.summernote').summernote({
     callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0]);
        }
    },
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph', 'style']],
        ['height', ['height']],
        ['Insert', ['picture', 'link', 'video', 'table', 'hr']],
        ['Misc', ['fullscreen', 'codeview', 'help']],
        ['mybutton', ['highlight']]
    ],
    popover: {
        image: [
            ['custom', ['captionIt']],
            ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['remove', ['removeMedia']]
        ]
    },
    captionIt:{
        icon:'<i class="note-icon-pencil"/>',
        figureClass:'image-container',
        figcaptionClass:'image-caption'
    },
    height: 200,
    minHeight: null,
    maxHeight: null,
    focus: false
});

$('.summernote').summernote('fontSize', 14);
$('.note-current-fontsize').text('14');

});
