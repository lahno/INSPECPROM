$(document).ready(function() {

    var modal_massage = $('#modal_massage');

    // POST SEND FEEDBACK
    $('#feedback_form').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        var f = form[0];
        var fd = new FormData(f);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: fd,
            processData: false,
            contentType: false,
            beforeSend: function () {
                beforeSendForm(form);
            },
            success: function (data) {
                if (data.status){
                    modal_massage.find('.modal-body p').text(data.message);
                    modal_massage.modal('show');
                }else{
                    alert('Error sending message');
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = $.parseJSON(xhr.responseText);
                    $.each(errors.errors, function (key, val) {
                        form.find("#create_request_form_" + key)
                            .addClass('is-invalid');
                    });
                }
            },
            complete: function () {
                afterSendForm(form);
            }
        });
    });


    function beforeSendForm(form) {
        form.find('button[type="submit"]').addClass('disabled');
    }

    function afterSendForm(form) {
        $('#form-output-global').removeClass('active');
        form.find('button[type="submit"]').removeClass('disabled');
    }
});