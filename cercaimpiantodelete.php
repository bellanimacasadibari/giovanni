 <?php
$host="localhost"; // Hostname
$username="setlist"; // Mysql username
$password=""; // Mysql password
$db_name="my_setlist"; //Nome del Database
$tbl_name="impianti"; // Nome della Tabella
// Procedimento per connettersi al Database
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB"); 
// Nome utente e password inviate attraverso il form
$myimpianto=$_POST['myimpianto'];
$sql="SELECT * FROM $tbl_name WHERE numeroimpianto='$myimpianto'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"+

//$_SESSION['myusername']="something";
//$_SESSION['mypassword']="something";
//$_SESSION['mytipo']="something";

if(isset($_POST['myimpianto'])){
 session_start();
 $_SESSION['cerca'] = $myimpianto;
 header("location:eliminaimpianto.php");
}
else {
echo "Attenzione numero impianto errato";
}}
?> 