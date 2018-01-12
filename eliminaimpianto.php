<html>
<head>
<title>Elimina Impianto</title>
</head>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style=text-align:center;>
<h1> Elimina Impianto</h1>
<body>
<p align = center>
<div id="profile">
<b id="welcome"> DATI IMPIANTO CERCATO<i> <br><br>
<tr>
<?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="impianti"; // Nome della Tabella
$connection = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db =mysql_select_db("$db_name")or die("cannot select DB"); 
session_start();
$user_check = $_SESSION['cerca'];
$ses_sql = mysql_query ("SELECT * FROM $tbl_name WHERE numeroimpianto ='$user_check'" , $connection);
$row = mysql_fetch_assoc($ses_sql);

?></tr></i></b>
<form action="#" method="post"> 
<form action="#" method="post"> 
<br>Numero Impianto: 
<?php echo $row['numeroimpianto'];?><br />
Indirizzo:  
<?php echo $row['indirizzo'];?><br />
Cliente Proprietario:
<?php echo $row['clienteproprietario'];?><br />
<br>
<input name="modifica" type="submit" id="modifica" value="ELIMINA"> 

</form> 
<?php 
if(isset($_POST['modifica'])){ 
    $ses_sql=mysql_query("DELETE FROM $tbl_name WHERE numeroimpianto ='$user_check'" , $connection); 
    
    header("location:impiantoeliminato.php");
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