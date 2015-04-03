  jQuery(document).ready(function ($) {
      
      $(".wp-shortify-choosen").chosen({no_results_text: "Oops, nothing found!"});
      $('.panel-heading span.clickable').on("click", function (e) {
            if ($(this).hasClass('panel-collapsed')) {
                // expand the panel
                $(this).parents('.panel').find('.panel-body').slideDown();
                $(this).removeClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon glyphicon-plus').addClass('glyphicon glyphicon-minus');
            }
            else {
                // collapse the panel
                $(this).parents('.panel').find('.panel-body').slideUp();
                $(this).addClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon glyphicon-minus').addClass('glyphicon glyphicon-plus');
            }
            
        });
   
         $('.wp-shortify-posts').DataTable({paging: true,searching: false,ordering: false,"info": false});
  });
 function open_popup(url) {
            width=600;
            height=600;
            var left = (jQuery(window).width() - width) / 2,
                top = (jQuery(window).height() - height) / 2,
                opts = 'status=1,' + (scroll ? 'scrollbars=1,' : '') + 'width=' + width + ',height=' + height + ',top=' + top + ',left=' + left;

            window.open(url, "", opts);
}