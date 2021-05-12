<?php

$name = $_POST['name'];
$email = $_POST['email'];
$conment = $_POST['conment'];

if(isset($name) and isset($email) and isset($conment)){
    
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$conment = htmlspecialchars($conment);


$name = urldecode($name);
$email = urldecode($email);
$conment = urldecode($conment);


$name = trim($name);
$email = trim($email);
$conment = trim($conment);

if (mail("daria_butakova98@mail.ru"," Имя:".$name,". E-mail: ".$email,". Вопрос, отзыв или пожелание:".$conment))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}

  
}
?>