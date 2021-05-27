<?php
$login = $_POST['login'];
$mysqli = new mysqli("localhost", "mysql", "mysql", "products");        
$result2=$mysqli->query("SELECT * FROM `users` WHERE  `login`='$login'");

$row_cnt = $result2->num_rows;
 
if ($row_cnt>0)
{

    $flag=1;
     
    echo $flag;
}
else {
    $flag=0;
     
       echo $flag;
}
 $mysqli->close;
     ?>