<?php
session_start();
    if (isset($_SESSION['name']) ){
         header('Location: /account.php');
    }
$title="Вход";
  require "header.php";  
?>
<script src="script_account.js"></script>
<div class="password_form">
    <h1 class="registration_head">Вход</h1>
    <form action="" method="post" id="acc_form">
        <div class="input_block_registration" >
        <input type="email" name="email_entrance" placeholder="Введите e-mail" class="name_email1">
            </div>
        <div class="input_block_registration" >
        <input type="password" name="password_entrance" placeholder="Введите пароль" class="name_email1">
            <div id="account_check"> </div>
            </div>
        
      <div class="button_registration_center"> 
        <input type="submit" class="button_registration1" value="Войти">
          </div>
         
    </form>
   
</div>
<?php
  require "footer.php";   
?>