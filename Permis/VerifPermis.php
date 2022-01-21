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
<br/><br/><br/>
<form method='POST' action='listePermis.php'>
	<table border='0'>
	<tr><td>IdPermis</td><td><input type='number' name='idPermis' value="<?php if(isset($_GET['idPermis'])) {echo $_GET['idPermis'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Type</td><td><input type='text' name='type' value="<?php if(isset($_GET['type'])) {echo $_GET['type'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Duree</td><td><input type='text' name='duree' value="<?php if(isset($_GET['duree'])) {echo $_GET['duree'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Etat</td><td><input type='text' name='etat' value="<?php if(isset($_GET['etat'])) {echo $_GET['etat'];} else {echo '';} ?>"/></td></tr>
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