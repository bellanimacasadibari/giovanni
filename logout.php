<?php
session_start();
session_destroy();
unset($_SESSION['login']);
$_SESSION['message'] = "Hai eseguito il Logout";
header("location: main_login.php");
?>