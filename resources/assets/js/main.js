/**
 * Created by ToothlessRebel on 28-Aug-16.
 */

$(function () {
    var clipboard = new Clipboard('.clippy.image');

    clipboard.on('success', function (event) {
        var $button = $(event.trigger);

        $button.popup({
            content: 'Copied!',
            target: $button,
            variation: 'inverted',
            on: 'click'
        }).popup('show');
    });

    clipboard.on('error', function (event) {
        var $button = $(event.trigger);

        $button.popup({
            content: 'Could Not Copy to Clipboard.',
            target: $button,
            variation: 'inverted',
            on: 'click'
        }).popup('show');
    });
});
