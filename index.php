<?php
$title="Главная";
  require "header.php";  
 //require('function_base.php');
?>
<div class="after_main_menu">
    <img src="images/icone.PNG" alt="" width="220" height="70">
    <div class="button_catalog_block">
        <button class="button_catalog">
            <div class="button_catalog_img"> <img src="images/button_main_menu.PNG" alt=""> </div>
            <div class="button_catalog_text"> Каталог</div>
        </button>
    </div>
    <div class="search_block">
        <form class="search">
            <input type="search" placeholder="Поиск" class="input">
            <button class="button_search" type="submit"></button>
        </form>
    </div>
    <div class="button_person_block">
        <button class="button_person"> </button>
    </div>
    <div class="button_cart_block">
        <button class="button_cart"> </button>
        <div class="round"> </div>
    </div>
</div>
<script src="img_script1.js"></script>
<div class="slider-box">
    <div class="slider">
        <img src="images/main_food_1.jpg" />
        <img src="images/main_food_2.jpg" />
        <img src="images/main_food_3.jpg" />
    </div>
    <ul class="circle">
        <li> </li>
        <li> </li>
        <li> </li>
    </ul>
    <div class="arrow arrow-left"></div>
    <div class="arrow arrow-right"></div>
    <div class="left" id="prev" onclick="return false"> </div>
    <div class="right" id="next" onclick="return false"> </div>
</div>

<div class="main_page">
    <h1> Новое поступление </h1>
    <div class="arrow-1">
        <div class="arrow-left-1" id="next_1"></div>
        <div class="arrow-right-1" id="prev_1"></div>
    </div>
    <script src="main_page_block_1_script.js"></script>
    <div class="main_page_rectangle">
        <div id="0_sale_block_1" class="rectangle_sale"> </div>
        <img src="" id="0_rectangle_img_block_1" width="240px" height="190px" />
        <a href="">
            <div id="0_name_product_block_1" class="name_product"></div>
        </a>
        <div id="0_price_with_sale_block_1" class="price_with_sale"></div>
        <div id="0_price_product_block_1" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="1_sale_block_1" class="rectangle_sale"> </div>
        <img src="" id="1_rectangle_img_block_1" width="240px" height="190px" />
        <a href="">
            <div id="1_name_product_block_1" class="name_product"></div>
        </a>
        <div id="1_price_with_sale_block_1" class="price_with_sale"></div>
        <div id="1_price_product_block_1" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="2_sale_block_1" class="rectangle_sale"> </div>
        <img src="" id="2_rectangle_img_block_1" width="240px" height="190px" />
        <a href="">
            <div id="2_name_product_block_1" class="name_product"></div>
        </a>
        <div id="2_price_with_sale_block_1" class="price_with_sale"></div>
        <div id="2_price_product_block_1" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="3_sale_block_1" class="rectangle_sale"> </div>
        <img src="" id="3_rectangle_img_block_1" width="240px" height="190px" />
        <a href="">
            <div id="3_name_product_block_1" class="name_product"></div>
        </a>
        <div id="3_price_with_sale_block_1" class="price_with_sale"></div>
        <div id="3_price_product_block_1" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="4_sale_block_1" class="rectangle_sale"> </div>
        <img src="" id="4_rectangle_img_block_1" width="240px" height="190px" />
        <a href="">
            <div id="4_name_product_block_1" class="name_product"></div>
        </a>
        <div id="4_price_with_sale_block_1" class="price_with_sale"></div>
        <div id="4_price_product_block_1" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
</div>
<div class="big_banners">
    <div class="rectangle_banner_big">
        <img src="images/big_banner_1.PNG" />
        <h3> <a href=""> Торты, десерты, сладкая выпечка </a></h3>
    </div>
    <div class="rectangle_banner_big">
        <img src="images/big_banner_2.PNG" />
        <h3><a href="">Рыба, икра, морепродукты </a> </h3>
    </div>
</div>
<div class="little_banners">
    <div class="rectangle_banner_little">
        <img src="images/little_banner_1.PNG" />
        <h3><a href="">Баннер 3</a></h3>
    </div>
    <div class="rectangle_banner_little">
        <img src="images/little_banner_2.PNG" />
        <h3><a href="">Баннер 4 </a></h3>
    </div>
    <div class="rectangle_banner_little">
        <img src="images/little_banner_3.PNG" />
        <h3><a href="">Баннер 5 </a> </h3>
    </div>
</div>
<div class="banner_cake">
    <img src="images/banner_cake.jpg" width="1250px;" height="320px">
    <div class="black_for_image_cake"> </div>
    <div class="banner_cake_text"> Десерты на заказ</div>
    <div class="banner_cake_text1">Сладкие шедевры ручной работы по рецептам нашего шеф-кондитера. <br>Индивидуальные десерты, разнообразие начинок, индивидуальный подход! Скидки именинникам.</div>
    <button class="banner_cake_button">
        <p style="color:white">Узнать подробней</p>
    </button>
</div>

<div class="main_page">
    <h1> Вода, соки, напитки </h1>
    <script src="main_page_blocks_2_3_script.js"></script>
    <div class="main_page_rectangle">
        <div id="0_sale_block_2" class="rectangle_sale"> </div>
        <img src="" id="0_rectangle_img_block_2" width="240px" height="190px" />
        <a href="">
            <div id="0_name_product_block_2" class="name_product"> </div>
        </a>
        <div id="0_price_with_sale_block_2" class="price_with_sale"></div>
        <div id="0_price_product_block_2" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="1_sale_block_2" class="rectangle_sale"> </div>
        <img src="" id="1_rectangle_img_block_2" width="240px" height="190px" />
        <a href="">
            <div id="1_name_product_block_2" class="name_product"></div>
        </a>
        <div id="1_price_with_sale_block_2" class="price_with_sale"></div>
        <div id="1_price_product_block_2" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="2_sale_block_2" class="rectangle_sale"> </div>
        <img src="" id="2_rectangle_img_block_2" width="240px" height="190px" />
        <a href="">
            <div id="2_name_product_block_2" class="name_product"></div>
        </a>
        <div id="2_price_with_sale_block_2" class="price_with_sale"></div>
        <div id="2_price_product_block_2" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="3_sale_block_2" class="rectangle_sale"> </div>
        <img src="" id="3_rectangle_img_block_2" width="240px" height="190px" />
        <a href="">
            <div id="3_name_product_block_2" class="name_product"></div>
        </a>
        <div id="3_price_with_sale_block_2" class="price_with_sale"></div>
        <div id="3_price_product_block_2" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="4_sale_block_2" class="rectangle_sale"> </div>
        <img src="" id="4_rectangle_img_block_2" width="240px" height="190px" />
        <a href="">
            <div id="4_name_product_block_2" class="name_product"></div>
        </a>
        <div id="4_price_with_sale_block_2" class="price_with_sale"></div>
        <div id="4_price_product_block_2" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
</div>

<div class="main_page">
    <h1> Орехи </h1>
    <div class="main_page_rectangle">
        <div id="0_sale_block_3" class="rectangle_sale"> </div>
        <img src="" id="0_rectangle_img_block_3" width="240px" height="190px" />
        <a href="">
            <div id="0_name_product_block_3" class="name_product"></div>
        </a>
        <div id="0_price_with_sale_block_3" class="price_with_sale"></div>
        <div id="0_price_product_block_3" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="1_sale_block_3" class="rectangle_sale"> </div>
        <img src="" id="1_rectangle_img_block_3" width="240px" height="190px" />
        <a href="">
            <div id="1_name_product_block_3" class="name_product"></div>
        </a>
        <div id="1_price_with_sale_block_3" class="price_with_sale"></div>
        <div id="1_price_product_block_3" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="2_sale_block_3" class="rectangle_sale"> </div>
        <img src="" id="2_rectangle_img_block_3" width="240px" height="190px" />
        <a href="">
            <div id="2_name_product_block_3" class="name_product"></div>
        </a>
        <div id="2_price_with_sale_block_3" class="price_with_sale"></div>
        <div id="2_price_product_block_3" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="3_sale_block_3" class="rectangle_sale"> </div>
        <img src="" id="3_rectangle_img_block_3" width="240px" height="190px" />
        <a href="">
            <div id="3_name_product_block_3" class="name_product"></div>
        </a>
        <div id="3_price_with_sale_block_3" class="price_with_sale"></div>
        <div id="3_price_product_block_3" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
    <div class="main_page_rectangle">
        <div id="4_sale_block_3" class="rectangle_sale"> </div>
        <img src="" id="4_rectangle_img_block_3" width="240px" height="190px" />
        <a href="">
            <div id="4_name_product_block_3" class="name_product"></div>
        </a>
        <div id="4_price_with_sale_block_3" class="price_with_sale"></div>
        <div id="4_price_product_block_3" class="price_product"></div>
        <button class="button_main_page">
            <div class="button_main_page_text">В корзину</div>
            <div class="button_main_page_img"> <img src="images/button_cart_main_page.PNG" alt=""> </div>
        </button>
    </div>
</div>
<div class="blocks">
    <h1>Наши плюсы</h1>
    <div class="rectangle_block_plus"> <img src="images/img_plus1.PNG" class="img_block_plus" />
        <h3 class="head_block_plus"> Широкий ассортимент</h3>
        <div class="text_block_plus">Мы закупаем фрукты и овощи по<br> всему миру – от Эквадора до Китая.<br> Более 400 сортов овощей и фруктов <br> представлены на наших прилавках.</div>
    </div>
    <div class="rectangle_block_plus">
        <img src="images/img_plus2.PNG" class="img_block_plus" />
        <h3 class="head_block_plus">Всегда свежие</h3>
        <div class="text_block_plus">Фрукты и овощи перевозятся в <br> машинах-рефрижераторах с разными<br> режимами температуры. Мы знаем,<br> сколько градусов внутри каждого плода! </div>
    </div>
    <div class="rectangle_block_plus">
        <img src="images/img_plus3.PNG" class="img_block_plus" />
        <h3 class="head_block_plus">Контроль качества</h3>
        <div class="text_block_plus"> Мы контролируем качество – от<br> поставщика до полки. Для хранения<br> мы используем самое современное <br>оборудование. </div>
    </div>
</div>

<div class="blocks">
    <h1>Бренды</h1>
    <div class="arrow-1">
        <div class="arrow-left-1"></div>
        <div class="arrow-right-1"></div>
    </div>
    <div class="rectangle_block_brand">
        <img src="images/brand1.PNG" /></div>
    <div class="rectangle_block_brand">
        <img src="images/brand2.PNG" /></div>
    <div class="rectangle_block_brand">
        <img src="images/brand3.PNG" /></div>
    <div class="rectangle_block_brand">
        <img src="images/brand4.PNG" /></div>
    <div class="rectangle_block_brand">
        <img src="images/brand5.PNG" /></div>
</div>

<div class="blocks">
    <h1>Акции</h1>
    <div class="promotions">
        <div class="rectangle_block_promotions">
            <img src="images/promotions_1.PNG" class="img_round_promo">
        </div> <a href="" class="promotions_text">Отборные фрукты и овощи, с привлекательной ценой</a>
        <div class="data_promotions">10.11.2020</div>
    </div>
    <div class="promotions">
        <div class="rectangle_block_promotions">
            <img src="images/promotions_2.PNG" class="img_round_promo" />
        </div> <a href="" class="promotions_text">Дни испанской кухни</a>
        <div class="data_promotions">10.11.2020</div>
    </div>
    <div class="promotions">
        <div class="rectangle_block_promotions">
            <img src="images/promotions_3.PNG" class="img_round_promo" />
        </div> <a href="" class="promotions_text">Скидка на зерновой кофе</a>
        <div class="data_promotions">10.11.2020</div>
    </div>
    <div class="promotions">
        <div class="rectangle_block_promotions">
            <img src="images/promotions_4.PNG" class="img_round_promo" />
        </div> <a href="" class="promotions_text">Скидка на всю выпечку 40% после 19:00</a>
        <div class="data_promotions">10.11.2020</div>
    </div>
</div>

<div class="block_recomend">
    <h1 class="head_promotion">Отзывы клиентов</h1>
    <div class="rectangle_block_recomend">
        <div class="name_recomend">Alexey</div>
        <div class="text_recomend">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque ultrices tincidunt. Sed malesuada ipsum tellus, eget auctor nisl luctus vitae. Duis nec eros turpis. Sed convallis felis dui, sed suscipit nisi lobortis id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque ultrices tincidunt. Sed malesuada ipsum tellus, eget auctor nisl luctus vitae. Duis nec eros turpis. Sed convallis felis dui, sed suscipit nisi lobortis id.
        </div>
    </div>
    <div class="rectangle_block_recomend">
        <div class="name_recomend">Elena</div>
        <div class="text_recomend">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque ultrices tincidunt. Sed malesuada ipsum tellus, eget auctor nisl luctus vitae. Duis nec eros turpis. Sed convallis felis dui, sed suscipit nisi lobortis id.
        </div>
    </div>
    <div class="rectangle_block_recomend">
        <div class="name_recomend">Alexey</div>
        <div class="text_recomend">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque ultrices tincidunt. Sed malesuada ipsum tellus, eget auctor nisl luctus vitae. Duis nec eros turpis. Sed convallis felis dui, sed suscipit nisi lobortis id.
        </div>
    </div>
</div>
  <script src="send_form.js"></script>
<div class="feedback">
    <h1 class="feedback_head">Обратная связь</h1>
    <form id="feedback_form" method="post">
        <div class="input_block">
        <input type="text" name="name" placeholder="Имя" class="name_email">
            </div>
        <div class="input_block"> 
        <input type="email" name="email" placeholder="Ваша почта" class="name_email"><br>
            </div>
        <input type="text" name="conment" placeholder="Ваш вопрос, отзыв или пожелание" class="question"><br>
        <div class="checkbox_feedback">
            <div id="check_block">
  <input type="checkbox" id="check" name="check" />
  <label for="check">Настоящим подтверждаю, что я ознакомлен и согласен с условиями оферты и политики конфиденциальности</label>
                </div>
</div>
        <input type="submit" class="button_send" >
    </form>
</div>

<?php
  require "footer.php";   
?>