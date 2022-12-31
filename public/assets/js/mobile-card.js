var get_url = $('#base_url').val();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '.card-preview', function () {
    var card_title =   $(this).data('title');
    var card_id =  $(this).data('id');
    $.ajax({
        type: 'get',
        url: get_url + '/user/card-share-info/'+card_id,
        async: true,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function () {
            $("body").css("cursor", "progress");
        },
        success: function (response) {
            if (response.status == 1) {
                $('#cardOffcanvasBody').empty();
                $('.offcanvas-title').html(card_title);
                $('#offcanvasBottom').toggleClass('show');
                $('#cardOffcanvasBody').append(response.data);
            } else {
                toastr.error(response.message);
            }
            $('.loading-spinner').removeClass('active');
       },
        complete: function (data) {
            $("body").css("cursor", "default");
            $('.loading-spinner').removeClass('active');
        }
    });
})

$(document).on('click', '.send-modal', function () {
    var card_id =  $(this).data('id');
    $.ajax({
        type: 'get',
        url: get_url + '/user/send-modal-info/'+card_id,
        async: true,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function () {
            $("body").css("cursor", "progress");
        },
        success: function (response) {
            if (response.status == 1) {
                $('#sendModalBody').empty();
                $('#send-modal').modal('show');
                $('#sendModalBody').append(response.data);
            } else {
                toastr.error(response.message);
            }
            $('.loading-spinner').removeClass('active');
        },
        complete: function (data) {
            $("body").css("cursor", "default");
            $('.loading-spinner').removeClass('active');
        }
    });
})


$(document).on('click', '#openEmailModal', function () {
    var card_id =  $(this).data('id');
    $.ajax({
        type: 'get',
        url: get_url + '/user/get-email-form/'+card_id,
        async: true,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function () {
            $("body").css("cursor", "progress");
        },
        success: function (response) {
            if (response.status == 1) {
                $('#emailModalBody').empty();
                $('#emailModal').modal('show');
                $('#emailModalBody').append(response.data);
            } else {
                toastr.error(response.message);
            }
            $('.loading-spinner').removeClass('active');
        },
        complete: function (data) {
            $("body").css("cursor", "default");
            $('.loading-spinner').removeClass('active');
        }
    });
})

$(document).on('click', '.send-text', function () {
    toastr.error('This Service not available now', {timeOut: 5000})
})

$(document).on('click', '.close-offcanvas', function () {
    $('#offcanvasBottom').removeClass('show');
})

$(document).on('submit', "#sendCardForm", function (e) {
        e.preventDefault();
        var form = $("#sendCardForm");
        $.ajax({
            type: 'post',
            data: form.serialize(),
            url: form.attr('action'),
            async: true,
            beforeSend: function () {
                $("body").css("cursor", "progress");
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#sendCardForm')[0].reset();
                    $('#emailModal').modal('hide');
                } else {
                    toastr.error(response.message);
                }
                $('.loading-spinner').removeClass('active');

            },
            error: function (jqXHR, exception) {
                toastr.error('Something wrong');
            },
            complete: function (response) {
                $("body").css("cursor", "default");
                $('.loading-spinner').removeClass('active');

            }
        });
    });

