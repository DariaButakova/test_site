<?php
class NewsDB {
    var $id = null;
    var $name = null;
    var $price = null;
    var $sale = null;
    var $measure_of_weight=null;
    var $image = null;
    var $block = null;

    function setID($id) {
        $this->id = $id;
    }
    function setName($name) {
        $this->name = $name;
    }
    function setPrice($price) {
        $this->price = $price;
    }
     function setSale($sale) {
        $this->sale = $sale;
    }
     function setMeasure_of_weight($measure_of_weight){
         $this->measure_of_weight=$measure_of_weight;
     }      
    function setBlock($block) {
        $this->block = $block;
    } 
    function setImage($image) {
        $this->image = $image;
    } 
}
$data_array = array(); 
$data = null;
    $mysqli = new mysqli("localhost", "mysql", "mysql", "products");  
    $array=[];
/* Проверить соединение */ 
    if ($mysqli->connect_errno) {
    //printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();}  

if($_GET['block_flag']==1){
    $result=$mysqli->query("SELECT * FROM `new` WHERE `block`='first_block'");
}
else{
    $result=$mysqli->query("SELECT * FROM `new` WHERE  `block`='second_block' OR `block`='third_block'");
}

    while($row=$result->fetch_assoc()){
          $data = new NewsDB();
          $data->setID($row['id']);
          $data->setName($row['name']);
          $data->setPrice($row['price']);
          $data->setSale($row['sale']);
          $data->setMeasure_of_weight($row['measure_of_weight']);
          $data->setBlock($row['block']);
          $lol = base64_encode( $row['image']);
          $data->setImage($lol);
          
           array_push($data_array, $data);
      }

echo json_encode($data_array); 

    $mysqli->close; 

 ?>
