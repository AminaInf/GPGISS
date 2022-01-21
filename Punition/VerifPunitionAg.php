<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>
<body>
<br/><br/><br/><br/>
<form method='POST' action='listePunitionAg.php'>
	<table border='0'>
	<tr><td>IdPunition</td><td><input type='number' name='idPunition' value="<?php if(isset($_GET['idPunition'])) {echo $_GET['idPunition'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdPersonne</td><td><input type='number' name='idPersonne' value="<?php if(isset($_GET['idPersonne'])) {echo $_GET['idPersonne'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Matricule</td><td><input type='number' name='matricule' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DatePunition</td><td><input type='date' name='datePunition' value="<?php if(isset($_GET['datePunition'])) {echo $_GET['datePunition'];} else {echo '';} ?>"/></td></tr>
	<tr><td><input type='submit' name='Enregistrer' value='Enregistrer'></td><br></tr>
		
	</table>
</form>
<?php
	session_start();
	//recuperation des messages d'erreur
	if(isset($_GET['vide']))
	{
		echo "<font color='red' size='5'>".$_GET['vide']."</font color>";
	}
	
?>
</body>
</html>