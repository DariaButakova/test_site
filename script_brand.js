$(function () {
    margin_brand = parseInt($('.image_brand').css('marginLeft'));
    width_brand = $('.brand_i').width();
    width_brand_all = $('.image_brand').width();
    width_brand_img = $('.rectangle_block_brand').width();
   
   plus_brand=0;
    $(document).ready(function () {
        $(document).on("click", "#left_brand", function () {
          if (width_brand< width_brand_all)
            {
                plus_brand = plus_brand + width_brand_img;
                width_brand=width_brand+width_brand_img;
                
               $('.image_brand').animate({
                    marginLeft: -plus_brand
                }, 1000);
                
            }

        });
        $(document).on("click", "#right_brand", function () {
            
            if(plus_brand>0)
            {
            plus_brand = plus_brand - width_brand_img;
            width_brand=width_brand-width_brand_img;
                
            $('.image_brand').animate({
                marginLeft: -plus_brand
            }, 1000);
            }

        });
    });
});

