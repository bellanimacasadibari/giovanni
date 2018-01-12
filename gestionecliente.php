<HTML>
<BODY>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style="text-align:center;">
<H1> <b> <p align = center>Gestione Clienti</b> </H1>

<form name="" action="creacliente1.php" method="GET">
<input type="submit" name="creacliente" value="CREA CLIENTE" />
</form>
<br>
<form name="" action="selezionausercli.php" method="GET">
<input type="submit" name="selezionacliente" value="MODIFICA CLIENTE" />
</form>
<br>
<form name="" action="selezionauserclidelete.php" method="GET">
<input type="submit" name="eliminacliente" value="ELIMINA CLIENTE" />
</form>
<div style="text-align:center;">
<form name="indietro" action="dipendentehome.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</div>
</body>
</BODY>
</HTML>