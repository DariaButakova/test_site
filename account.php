<?php
session_start();
$title="Личный кабинет";
  require "header.php";
//echo $_SESSION['name'];
 //echo $_SESSION['surname'];
?>


<div class="account_text"> Добро пожаловать,<?php echo " "; echo $_SESSION['name']; echo " ";echo $_SESSION['surname']?></div>

<button class="button_registration1" id="button_exit" onclick="location.href='logout.php'"> Выйти
</button>

<?php
require "footer.php";   
?>