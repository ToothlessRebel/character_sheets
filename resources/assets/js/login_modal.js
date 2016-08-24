/**
 * Created by ToothlessRebel on 24-Aug-16.
 */

$(function () {
    var $modal = $('.login.modal');
    var $content = $modal.find('.content');
    var $sign_in_button = $content.find('button.sign.in');
    var $errors = $content.find('.error.message ul.errors');
    var $form = $errors.closest('.ui.form');

    var reloadHeader = function () {
        $.ajax({
            url: '/getHeader',
            method: 'GET'
        }).done(function (response) {
            $('.app.header.row').html(response);
            $modal.modal('hide');
        });
    };

    var setFormErrored = function () {
        $form.addClass('error');
    };

    var clearFormErrors = function () {
        $form.removeClass('error');
        $errors.empty();
    };

    $sign_in_button.on('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        clearFormErrors();

        $sign_in_button.addClass('loading');

        var form_data = new FormData();
        $content.find('input').each(function (key, input) {
            var $input = $(input);
            form_data.append($input.attr('name'), $input.val());
        });

        $.ajax({
            url: '/login',
            method: 'POST',
            data: form_data,
            processData: false,
            contentType: false
        }).done(function (response) {
            if (response.authenticated) {
                reloadHeader();
            } else {
                // {"authenticated":false,"remember":"on","username":"toothlessrebel@gmail.com","errors":{"email":"These credentials do not match our records."}}
                setFormErrored();
                $errors.append($('<li></li>').text(response.errors.email));
            }
        }).fail(function (response) {
            // {"email":["The email field is required."],"password":["The password field is required."]}
            var json = response.responseJSON;
            setFormErrored();
            json.email.forEach(function (message) {
                $errors.append($('<li></li>').text(message));
            });
            json.password.forEach(function (message) {
                $errors.append($('<li></li>').text(message));
            });
        }).always(function () {
            $sign_in_button.removeClass('loading');
        });
    });
});
