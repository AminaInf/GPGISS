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
<form method='POST' action='listeFctAgent.php'>
	<table border='0'>
	<tr><td>IdPersonne</td><td><input type='number' name='idPersonne' value="<?php if(isset($_GET['idPersonne'])) {echo $_GET['idPersonne'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Matricule</td><td><input type='number' name='matricule' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdFonction</td><td><input type='text' name='idFonction' value="<?php if(isset($_GET['idFonction'])) {echo $_GET['idFonction'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateDebut</td><td><input type='date' name='dateDebut' value="<?php if(isset($_GET['dateDebut'])) {echo $_GET['dateDebut'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateFin</td><td><input type='date' name='dateFIN' value="<?php if(isset($_GET['dateFIN'])) {echo $_GET['dateFIN'];} else {echo '';} ?>"/></td></tr>
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