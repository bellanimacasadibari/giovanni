<html>
<head>
<title>Amministratore</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<div style="text-align:center;">
<h1> Amministratore </h1>
<body>
<p align = center>
<div id="profile">
<b id="welcome"> DATI PERSONALI<i> <br>
<tr>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
$connection = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db =mysql_select_db("$db_name")or die("cannot select DB"); 
session_start();
$user_check = $_SESSION['login'];
$ses_sql = mysql_query ("SELECT * FROM $tbl_name WHERE username ='$user_check'" , $connection);
$row = mysql_fetch_assoc($ses_sql);
echo "Username: ". $row['username']. "<br>";
echo "Cognome: ". $row['Cognome']. "<br>";
echo "Nome: ". $row['Nome']. "<br>";
echo "Indirizzo: ". $row['Indirizzo']. "<br>";
echo "Telefono: ". $row['NumeroTel']. "<br>";
echo "Email: ". $row['email']. "<br>";
echo "Codice Personale: ". $row['codloginext']. "<br>";

?></tr></i></b>
<form name="modifica_dati" action="modificadatiamministratore.php" method="GET">
<br>
<input type="submit" name="richiama1" value="MODIFICA I TUOI DATI" />
</form>
<form name="richiamo_funzione" action="gestionedipendenti.php" method="GET">
<input type="submit" name="richiama" value="GESTISCI DIPENDENTI" />
</form>
</div>
</body>
</div>
</body>
</html>