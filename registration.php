<?php
session_start();
//$title="Регистрация";
  //require "header.php";  

$name = $_POST['name_registration'];
$surname = $_POST['surname_registration'];
$login = $_POST['email_registration'];
$password1 = $_POST['password1'];

$password1=md5($password1);
$mysqli = new mysqli("localhost", "mysql", "mysql", "products");  
/* Проверить соединение */ 
    if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();}


$result1=$mysqli->query("INSERT INTO users (surname,password,name,login) VALUES('$surname','$password1','$name','$login')");
       
         $_SESSION['name']= $name;    
          $_SESSION['surname']=$surname;
 header('Location: /account.php');
      
  $mysqli->close; 
  //require "footer.php";   
?>