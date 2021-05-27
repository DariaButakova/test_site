<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$password=md5($password);

$mysqli = new mysqli("localhost", "mysql", "mysql", "products");        
$result3=$mysqli->query("SELECT * FROM `users` WHERE  `login`='$login'AND`password`='$password'");

$row_cnt_3 = $result3->num_rows;

 
if ($row_cnt_3==0)
{
    $flag=1;   
    echo $flag;
}
else {
    $flag=0;    
    echo $flag;
   while($row=$result3->fetch_assoc()){        
         $_SESSION['name']= $row['name'];    
          $_SESSION['surname']=$row['surname'];
      } 
}
 $mysqli->close;
  
?>