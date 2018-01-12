 <?php
 
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_nam="sensori"; // Nome della Tabella
$db = mysql_connect($localhost,$username,$password);
mysql_select_db($db_name,$db);

$codsensore = $_POST['codsensore'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$clienteproprietario=$_POST['clienteproprietario'];
$impianto= $_POST['impianto'];
$codcliente= $_POST['codcliente'];
mysql_query("INSERT INTO ".$tbl_nam." (codsensore,marca,tipo,clienteproprietario) VALUES ('$codsensore','$marca','$tipo','$clienteproprietario')",$db) || die(mysql_error());

header("location:sensorecreato.php");

/* quindi i dati sono stati salvati nel database e l'utente è registrato */
mysql_close($db);
?> 