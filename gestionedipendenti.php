<HTML>
<BODY>
<body link="black">
<a href="logout.php">Logout</a>
<a href="amministratorehome.php">Home</a>
<div style="text-align:center;">
<H1> <b> <p align = center>Gestione dipendenti</b> </H1>

<form name="" action="creadipendente1.php" method="GET">
<input type="submit" name="creadipendente" value="CREA DIPENDENTE" />
</form>
<br>
<form name="" action="selezionauserdip.php" method="GET">
<input type="submit" name="selezionadipendente" value="MODIFICA DIPENDENTE" />
</form>
<br>
<form name="" action="selezionauserdipdelete.php" method="GET">
<input type="submit" name="eliminadipendente" value="ELIMINA DIPENDENTE" />
</form>
<div style="text-align:center;">
<form name="indietro" action="amministratorehome.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</div>
</body>
</BODY>
</HTML>