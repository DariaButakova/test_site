<?php
session_start();
if (isset($_SESSION['name']) ){
     header('Location: /account.php');
}
$title="Регистрация";
  require "header.php";  
?>
<script src="script_password.js"></script>
<div class="password_form">
    <h1 class="registration_head">Пароль</h1>
    <form action="registration.php" method="post" id="pas_form">
        
        <?php
    echo '<input type="hidden" name="name_registration" placeholder="Введите имя" class="name_email1" value="'.$_POST['name_registration'].'" />
    <input type="hidden" name="surname_registration" placeholder="Введите фамилию" class="name_email1" value="'.$_POST['surname_registration'].'" />
    <input type="hidden" name="email_registration" placeholder="Введите e-mail" class="name_email1" value="'.$_POST['email_registration'].'" />'
        ;       
?>
        <div class="input_block_registration" >
        <input type="password" name="password1" placeholder="Введите пароль" class="name_email1">
            </div>
        <div class="input_block_registration" >
        <input type="password" name="password2" placeholder="Подтвердите пароль" class="name_email1">
            </div>
        
      <div class="button_registration_center"> 
        <input type="submit" class="button_registration1" value="Зарегистрироваться" >
          </div>

    </form>
</div>
<?php
  require "footer.php";   
?>