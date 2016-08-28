/**
 * Created by ToothlessRebel on 23-Aug-16.
 */

$(function () {
    $('.ui.modal').modal();
    $('.ui.dropdown').dropdown();

    var $header = $('.app.header.row');

    $header.on('click', '.login.action', function () {
        $('.login.modal').modal('show');
    });

    if ($('span.show.login').data('show') === true) {
        $header.find('.login.action').trigger('click');
    }
});
