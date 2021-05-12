$(function(){
click=0;
var block_flag=1;
$.ajax({
    type:"GET",
    url: "function_base.php?block_flag=1",
    datatype: "json",
    success: function (data, textStatus, xhr) {
        data = JSON.parse(xhr.responseText);
        $(document).ready(function () {
            $(document).on("click", "#next_1", function () {
                if (data.length-5 > click) {
                    click = click + 5;
                    console.log(click);
                    output(data, click);   
                }        
            });
            $(document).on("click", "#prev_1", function () {
                if (click != 0) {
                    click = click - 5;
                    console.log(click);
                    output(data, click);
                }
            });
        });
        output(data,click);
    }
});
});
function output(data,click,flag) {
    for (var i = 0+click; i <5+click; i++) {
        var name = data[i].name;
        var price = data[i].price;
        var sale = data[i].sale;
        var measure_of_weight = data[i].measure_of_weight;
        var image = data[i].image;

        if (i > 4) {
            ii = i - 5;
        } else ii = i;
    
  
        var image1 = 'data:image/png;base64,' + image + '';
        var grid = "#";
        var str_img = grid + ii + "_rectangle_img_block_1";
        var str_name = grid + ii + "_name_product_block_1";
        var str_price = grid + ii + "_price_product_block_1";
        var str_with_sale = grid + ii + "_price_with_sale_block_1";
        var str_sale = grid + ii + "_sale_block_1";        
      
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