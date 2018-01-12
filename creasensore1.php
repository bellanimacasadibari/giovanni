<HTML>
<BODY>
<body link="black">
<a href="logout.php">Logout</a>
<a href="dipendentehome.php">Home</a>
<H1> <b> <p align = center>Crea Sensore</b> </H1>
<table border="0" cellspacing="1" cellpadding="0" width="300" align="center" bgcolor="#cccccc"><tbody>
<tr><form action="creasensore.php" method="post"> <input name="phpMyAdmin" type="hidden" value="V0N0db6Fl62QWr6eBkly75xAGn3" /><td>
<table border="0" cellspacing="1" cellpadding="3" width="100%" bgcolor="#ffffff"><tbody>
<tr>
<td colspan="3"><strong>Crea sensore</strong></td>
</tr>
<tr>
<td width="78">Codice Sensore</td>
<td width="6">:</td>
<td width="294"><input id="codsensore" name="codsensore" type="text" /></td>
</tr>
<tr>
<td>Marca</td>
<td>:</td>
<td><input id="marca" name="marca" type="text" /></td>
</tr>
<tr>
<td width="78">Tipo</td>
<td width="6">:</td>
<td width="294"><input id="tipo" name="tipo" type="text" /></td>
</tr>
<tr>
<td width="78">Cliente Proprietario</td>
<td width="6">:</td>
<td width="294"><input id="clienteproprietario" name="clienteproprietario" type="text" /></td>
</tr>
<tr>
<td width="78">Codice cliente proprietario</td>
<td width="6">:</td>
<td width="294"><input id="codcliente" name="codcliente" type="text" /></td>
<tr>
<tr>
<td width="78">Impianto</td>
<td width="6">:</td>
<td width="294"><input id="impianto" name="impianto" type="text" /></td>
<tr>
</tr>
<tr>
<td></td>
<td></td>
<td><input name="Submit" type="submit" value="Crea" /></td>

</tr>
</tbody></table>
</td>
</form></tr>

</tbody></table> 
<div style="text-align:center;">
<form name="indietro" action="gestionesensori.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</body>
</BODY>
</HTML>