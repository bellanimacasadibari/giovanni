 <?php
// Controlla se la sessione Ã¨ stata registrata, altrimenti rimanda alla pagina di login
session_start();
if(!isset($_SESSION[myusername])){
header("location:main_login.php");
} 
?> 