<HTML>
<BODY>
<body link="black">
<a href="logout.php">Logout</a>
<a href="amministratorehome.php">Home</a>
<H1> <b> <p align = center>Crea dipendente</b> </H1>
<table border="0" cellspacing="1" cellpadding="0" width="300" align="center" bgcolor="#cccccc"><tbody>
<tr><form action="creadipendente.php" method="post"> <input name="phpMyAdmin" type="hidden" value="V0N0db6Fl62QWr6eBkly75xAGn3" /><td>
<table border="0" cellspacing="1" cellpadding="3" width="100%" bgcolor="#ffffff"><tbody>
<tr>
<td colspan="3"><strong>Crea dipendente</strong></td>
</tr>
<tr>
<td width="78">Codice</td>
<td width="6">:</td>
<td width="294"><input id="Codice" name="Codice" type="text" /></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input id="username" name="username" type="text" /></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input id="password" name="password" type="password" /></td>
</tr>
<tr>
<td width="78">Cognome</td>
<td width="6">:</td>
<td width="294"><input id="Cognome" name="Cognome" type="text" /></td>
</tr>
<tr>
<td width="78">Nome</td>
<td width="6">:</td>
<td width="294"><input id="Nome" name="Nome" type="text" /></td>
</tr>
<tr>
<td width="78">Numero di telefono</td>
<td width="6">:</td>
<td width="294"><input id="Numerotel" name="NumeroTel" type="text" /></td>
</tr>
<tr>
<td width="78">Indirizzo</td>
<td width="6">:</td>
<td width="294"><input id="Indirizzo" name="Indirizzo" type="text" /></td>
</tr>
<tr>
<td width="78">email</td>
<td width="6">:</td>
<td width="294"><input id="email" name="email" type="text" /></td>
</tr>
<tr>
<td width="78">Codice Personale</td>
<td width="6">:</td>
<td width="294"><input id="codloginext" name="codloginext" type="text" /></td>
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
<form name="indietro" action="gestionedipendenti.php" method="GET">
<br>
<br>
<input type="submit" style="background-color: gray" name="richiama2" value="INDIETRO" />
</form>
</div>
</body>
</BODY>
</HTML>