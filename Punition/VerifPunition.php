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
<form method='POST' action='listePunition.php'>
	<table border='0'>
	<tr><td>IdPunition</td><td><input type='number' name='idPunition' value="<?php if(isset($_GET['idPunition'])) {echo $_GET['idPunition'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Nature</td><td><input type='text' name='nature' value="<?php if(isset($_GET['nature'])) {echo $_GET['nature'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Duree</td><td><input type='text' name='duree' value="<?php if(isset($_GET['duree'])) {echo $_GET['duree'];} else {echo '';} ?>"/></td></tr>
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