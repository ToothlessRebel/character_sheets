/**
 * Created by ToothlessRebel on 23-Aug-16.
 */

$(function () {
    $('.modal').modal();

    $('.login.action').on('click', function () {
        $('.login.modal').modal('show');
    })
});
