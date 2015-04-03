// open a popup window at the center of the screen
function open_popup(url) {
    width=600;
    height=600;
    var left = (jQuery(window).width() - width) / 2,
        top = (jQuery(window).height() - height) / 2,
        opts = 'status=1,' + (scroll ? 'scrollbars=1,' : '') + 'width=' + width + ',height=' + height + ',top=' + top + ',left=' + left;

    window.open(url, "", opts);
}
