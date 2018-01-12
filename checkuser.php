 <?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="members"; // Nome della Tabella
// Procedimento per connettersi al Database
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB"); 
// Nome utente e password inviate attraverso il form
$mycodloginext=$_POST['mycodloginext'];
$sql="SELECT * FROM $tbl_name WHERE codloginext='$mycodloginext'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

 session_start();
 $_SESSION['Cerca'] = $mycodloginext;
 header("location:utentehome.php");
 }
else {
echo "Attenzione utente non esistente!";
}
?> 