<?php
 
$host='localhost'; // Hostname
$username='setlist'; // Mysql username
$password=''; // Mysql password
$db_name='my_setlist'; //Nome del Database
$tbl_nam='impianti'; // Nome della Tabella
$db = mysql_connect($localhost,$username,$password);
mysql_select_db($db_name,$db);

$numeroimpianto = $_POST['numeroimpianto'];
$indirizzo = $_POST['indirizzo'];
$clienteproprietario=$_POST['clienteproprietario'];
$codcliente= $_POST['codloginext'];
mysql_query("INSERT INTO ".$tbl_nam." (numeroimpianto,indirizzo,clienteproprietario,codloginext) VALUES ('$numeroimpianto','$indirizzo','$clienteproprietario','$codcliente')",$db) || die(mysql_error());

header("location:impiantocreato.php");

/* quindi i dati sono stati salvati nel database e l'utente è registrato */
mysql_close($db);
?> 
