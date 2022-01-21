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
<form method='POST' action='listePrevention.php'>
	<table border='0'>
	<tr><td>IdPersonne</td><td><input type='number' name='idPersonne' value="<?php if(isset($_GET['idPersonne'])) {echo $_GET['idPersonne'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Telephone</td><td><input type='text' name='tel' value="<?php if(isset($_GET['tel'])) {echo $_GET['tel'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Adresse</td><td><input type='text' name='adresse' value="<?php if(isset($_GET['adresse'])) {echo $_GET['adresse'];} else {echo '';} ?>"/></td></tr>
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