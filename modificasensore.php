<html>
<head>
<title>Modifica Sensore</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style="text-align:center;">
<h1> Modifica dati  </h1>
<body>
<p align = center>
<div id="profile">
<b id="welcome"> DATI SENSORE CERCATO<i> <br><br>
<tr>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="sensori"; // Nome della Tabella
$connection = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db =mysql_select_db("$db_name")or die("cannot select DB"); 
session_start();
$user_check = $_SESSION['cerca'];
$ses_sql = mysql_query ("SELECT * FROM $tbl_name WHERE codsensore ='$user_check'" , $connection);
$row = mysql_fetch_assoc($ses_sql);

?></tr></i></b>
Marca:
<?php echo $row['marca'];?> <br>
Tipo:
<?php echo $row['tipo'];?><br><br>
<form action="#" method="post"> 
<form action="#" method="post"> 
<b>
Cliente proprietario<br>  
<input name="clienteproprietario" type="text" id="clienteproprietario" value="<?php echo $row['clienteproprietario'];?>"><br />
Codice cliente<br> 
<input name="codloginext" type="text" id="codloginext" value="<?php echo $row['codloginext'];?>"><br />
Impianto<br>
<input name="impianto" type="text" id="impianto" value="<?php echo $row['impianto'];?>"><br />
<input name="modifica" type="submit" id="modifica" value="SALVA"> 
</b>
</form> 
<?php 
if(isset($_POST['modifica'])){ 
    $ses_sql=mysql_query("UPDATE sensori SET clientepropietario='".$_POST['clienteproprietario']."', codloginext='".$_POST['codloginext']."', impianto='".$_POST['impianto']."' WHERE codsensore ='$user_check'" , $connection); 
} 
//.... , 
?> 
<div style="text-align:center;">
<form name="indietro" action="selezionasensorecli.php" method="GET">
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</form>
</div>
</body>
</div>
</body>
</html>