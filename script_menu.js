$(function () {
    $(document).click(function (e) {
        
        if ($(e.target).closest('#button_catalog').length) {
            if ($('.dropdown-content').hasClass('show')) {
                $('.dropdown-content').removeClass('show');
                 $( '.dropdown-content').slideUp(400);
                var image2 ="images/button_main_menu.PNG";
                $('#img_catalog').attr('src', image2);
               
            } else {
                $( '.dropdown-content').slideDown(400);
                $('.dropdown-content').addClass('show');
                var image1 ="images/main_menu_exit.PNG";
               $('#img_catalog').attr('src', image1);
            }
            return;
        }
        if ($(e.target).closest('.dropdown-content').length) {
             
            return;
        }
        $('.dropdown-content').removeClass('show');
        var image2 ="images/button_main_menu.PNG";
        $('#img_catalog').attr('src', image2);
       $( '.dropdown-content').slideUp();
    });
});                   


