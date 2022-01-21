<html>
<head>
	
<title>Centre</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			<link rel="stylesheet" href="stylec.css">
</head>
<body>
<br/><br/><br/>
<form method='POST' action='listeCarteIdentite.php'>
	<table border='0' align="center">
	<tr><td>NumeroCNI</td><td><input type='number' name='numeroCNI' value="<?php if(isset($_GET['numeroCNI'])) {echo $_GET['numeroCNI'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdPersonne</td><td><input type='number' name='idPersonne' value="<?php if(isset($_GET['idPersonne'])) {echo $_GET['idPersonne'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Matricule</td><td><input type='number' name='matricule' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateDeliverance</td><td><input type='date' name='dateDeliverance' value="<?php if(isset($_GET['dateDeliverance'])) {echo $_GET['dateDeliverance'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateExpiration</td><td><input type='date' name='dateExpiration' value="<?php if(isset($_GET['dateExpiration'])) {echo $_GET['dateExpiration'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Photo</td><td><input type='text' name='photo' value="<?php if(isset($_GET['photo'])) {echo $_GET['photo'];} else {echo '';} ?>"/></td></tr>
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