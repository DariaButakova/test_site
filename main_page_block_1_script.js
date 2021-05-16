$(function () {
    margin_new = parseInt($('.main_page_slider').css('marginLeft'));
    width_new = $('.main_page_slider_hidden').width();
    width_new_all = $('.main_page_slider').width();
    width_block = $('.main_page_rectangle').width()+6;
    plus_new = 0;
  
    var block_flag = 1;
    $.ajax({
        type: "GET",
        url: "function_base.php",
        data: {
            block_flag: 1
        },
        datatype: "json",
        success: function (data, textStatus, xhr) {
            data = JSON.parse(xhr.responseText);
            for (var i = 0; i < 10; i++) {
                var name = data[i].name;
                var price = data[i].price;
                var sale = data[i].sale;
                var measure_of_weight = data[i].measure_of_weight;
                var image = data[i].image;


                var image1 = 'data:image/png;base64,' + image + '';
                var grid = "#";
                var str_img = grid + i + "_rectangle_img_block_1";
                var str_name = grid + i + "_name_product_block_1";
                var str_price = grid + i + "_price_product_block_1";
                var str_with_sale = grid + i + "_price_with_sale_block_1";
                var str_sale = grid + i + "_sale_block_1";

                $(str_img).html('');
                $(str_name).html('');
                $(str_price).html('');
                $(str_sale).html('');
                $(str_with_sale).html('');

                var with_sale = price * ((100 - sale) / 100);
                with_sale = Math.round(with_sale);
                $(str_with_sale).append(with_sale + " " + "руб");
                if (sale == 0) {
                    $(str_with_sale).css('color', 'white');
                    $(str_sale).css('background-color', 'white');
                }

                $(str_img).attr('src', image1);
                $(str_name).append(name + "," + measure_of_weight);
                $(str_price).append(price + " " + "руб");
                $(str_sale).append("-" + sale + "%");
            }

        }
    });
    $(document).ready(function () {
        $(document).on("click", "#next_1", function () {
            if (width_new < width_new_all) {
                plus_new = plus_new + width_block;
                width_new = width_new + width_block;
                $('.main_page_slider').animate({
                    marginLeft: -plus_new
                }, 1000);

            }
        });
        $(document).on("click", "#prev_1", function () {
            if (plus_new > 0) {
                plus_new = plus_new - width_block;
                width_new = width_new - width_block;
                $('.main_page_slider').animate({
                    marginLeft: -plus_new
                }, 1000);
            }
        });
    });
});