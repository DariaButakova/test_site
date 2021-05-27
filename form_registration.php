<?php
session_start();
if (isset($_SESSION['name']) ){
     header('Location: /account.php');
}
$title="Личный кабинет";
  require "header.php";  
?>
<script src="script_registration.js"></script>
<div class="registration_form">
    <h1 class="registration_head">Регистрация</h1>
    <form action="form_password.php" method="post" id="reg_form">
        <div class="input_block_registration" >
        <input type="text" name="name_registration" placeholder="Введите имя" class="name_email1">
            </div>
        <div class="input_block_registration" >
        <input type="text" name="surname_registration" placeholder="Введите фамилию" class="name_email1">
            </div>
        <div  class="input_block_registration" >
        <input type="email" name="email_registration"  placeholder="Введите e-mail" class="name_email1" >
            </div>
             
      <div class="button_registration_center"> 
        <input type="submit" class="button_registration1" value="Зарегистрироваться">
          </div>
         
    </form>
    <form action="form_entrance.php">
    <div class="button_registration_center"> 
        <button class="button_registration2" href="form_entrance.php"> Войти </button>
          </div>
    </form>
</div>
<?php
  require "footer.php";   
?>