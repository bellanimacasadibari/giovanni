<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
$connection = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db =mysql_select_db("$db_name")or die("cannot select DB"); 
session_start();
$user_check = $SESSION['login'];
$ses_sql = mysql_query ("SELECT * FROM $tbl_name WHERE username =$user_check" , $connection);
$row = mysql_fetch_row($ses_sql);
$login_session = $row['username'];
 
 if (!isset($login_session)){
    mysql_close($connection);
    header('location:main_login.php');  
    
 }
?>