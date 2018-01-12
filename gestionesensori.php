<HTML>
<BODY>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<div style="text-align:center;">
<H1> <b> <p align = center>Gestione Sensori</b> </H1>

<form name="" action="creasensore1.php" method="GET">
<input type="submit" name="creasensore" value="CREA SENSORE" />
</form>
<form name="" action="selezionasensorecli.php" method="GET">
<input type="submit" name="selezionasensore" value="MODIFICA SENSORE" />
</form>
<form name="" action="selezionasensoredelete.php" method="GET">
<input type="submit" name="eliminasensore" value="ELIMINA SENSORE" />
</form>
<br>
<form name="" action="creaimpianto1.php" method="GET">
<input type="submit" name="creaimpianto" value="CREA IMPIANTO" />
</form>
<form name="" action="selezionaimpiantodelete.php" method="GET">
<input type="submit" name="eliminaimpianto" value="ELIMINA IMPIANTO" />
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