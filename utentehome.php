<html>
<head>
<title>Utente</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<div style="text-align:center;">
<h1> Info Utente </h1>
<body>
<p align = center>
<div id="profile">
<b id="welcome"> DATI PERSONALI <br>
<tr>
<i>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members";// Nome della Tabella
$tbl_name1="sensori";
$tbl_name2="impianti";
$connection = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db =mysql_select_db("$db_name")or die("cannot select DB"); 
session_start();
$user_check = $_SESSION['Cerca'];
$ses_sql = mysql_query ("SELECT * FROM $tbl_name WHERE codloginext ='$user_check'" , $connection);
$row = mysql_fetch_assoc($ses_sql);
   $str = <<<HTML
 "Username: ". $row['username']. "<br>";
 "Cognome: ". $row['Cognome']. "<br>";
 "Nome: ". $row['Nome']. "<br>";
 "Indirizzo: ". $row['Indirizzo']. "<br>";
 "Telefono: ". $row['NumeroTel']. "<br>";
 "Email: ". $row['email']. "<br>";
 "Codice Personale: ". $row['codloginext']. "<br>";
 HTML;
  echo $str;
?>
</i>
<br>
<br>
ELENCO SENSORI POSSEDUTI:
<br>
<i>
<?php
$ses_sql1 = mysql_query ("SELECT * FROM $tbl_name1 WHERE codloginext= '$user_check'" , $connection);
while($array = mysql_fetch_array($ses_sql1))
{
//funzione da ciclare esempio
print ("Codice sensore n." . "$array[codsensore], ");
print ("$array[marca],  ");
print ("$array[tipo], ");
print ("Impianto n." . "$array[impianto]  ". "<br>");
}  
?>
</i>
<br>
<br>
INDIRIZZI IMPIANTI:
<br>
<i>
<?php
$ses_sql2 = mysql_query ("SELECT * FROM $tbl_name2 WHERE codloginext= '$user_check'" , $connection);
while($array1 = mysql_fetch_array($ses_sql2))
{
//funzione da ciclare esempio
print ("Impianto" . "$array1[numeroimpianto], ");
print ("$array1[indirizzo]" . "<br>");}
?>
</i>
</tr></b>
</div>
</body>
</div>
</body>
</html>
