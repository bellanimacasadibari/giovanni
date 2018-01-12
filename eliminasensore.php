<html>
<head>
<title>Elimina Sensore</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style=text-align:center;>
<h1> Elimina Sensore</h1>
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
<form action="#" method="post"> 
<form action="#" method="post"> 
<br>Codice Sensore: 
<?php echo $row['codsensore'];?><br />
Marca:  
<?php echo $row['marca'];?><br />
Tipo:
<?php echo $row['tipo'];?><br />
Cliente Proprietario:
<?php echo $row['clienteproprietario'];?><br />
<br>
<input name="modifica" type="submit" id="modifica" value="ELIMINA"> 

</form> 
<?php 
if(isset($_POST['modifica'])){ 
    $ses_sql=mysql_query("DELETE FROM $tbl_name WHERE codsensore ='$user_check'" , $connection); 
    
    header("location:sensoreeliminato.php");
} 
//.... , 
?> 
</form>
</div>
</body>
<div style="text-align:center;">
<form name="indietro" action="selezionasensoredelete.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</div>
</body>
</html>