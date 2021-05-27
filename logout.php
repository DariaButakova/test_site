<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['surname']);
header('Location: /form_registration.php');
?>