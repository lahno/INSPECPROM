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
                    console.log(errors);
                    $.each(errors, function (key, val) {
                        form.find("#forms-" + key).parents('.form-wrap-validation')
                            .addClass('is-invalid');
                        form.find("." + key).parents('.form-wrap-validation')
                            .addClass('is-invalid');
                    });
                }
                if( xhr.status === 419 ) {
                    alert(errors.message);
                }
                if( xhr.status === 500 ) {
                    alert('Непредвиденная ошибка сервера! Попробуйте чуть позже.');
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