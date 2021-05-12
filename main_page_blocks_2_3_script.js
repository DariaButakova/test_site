$(function(){ 
$.ajax({
    url: "function_base.php",
    datatype: "json",
    success: function (data, textStatus, xhr) {
        data1 = JSON.parse(xhr.responseText);
      for (var i = 0; i <10; i++) {
        var name = data1[i].name;
        var price = data1[i].price;
        var sale = data1[i].sale;
        var measure_of_weight = data1[i].measure_of_weight;
        var image = data1[i].image;
        var block = data1[i].block;
       
        if(i>4){ii=i-5} else    ii=i;;
             
        if (block=="second_block")number=2; 
          else number=3;
        var image1 = 'data:image/png;base64,' + image + '';
        var grid = "#";
        var str_img = grid + ii + "_rectangle_img_block_"+number;
        var str_name = grid + ii + "_name_product_block_"+number;
        var str_price = grid + ii + "_price_product_block_"+number;
        var str_with_sale = grid + ii + "_price_with_sale_block_"+number;
        var str_sale = grid + ii + "_sale_block_"+number;        

        
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
});

   
