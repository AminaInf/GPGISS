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
<form method='POST' action='listePrevenir.php'>
	<table border='0'>
	<tr><td>AIdPersonne</td><td><input type='number' name='Age_idPersonne' min='1' value="<?php if(isset($_GET['Age_idPersonne'])) {echo $_GET['Age_idPersonne'];} 
		else {echo '';} ?>"/></td></tr>
	<tr><td>Matricule</td><td><input type='number' name='matricule' min='1' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} 
		else {echo '';} ?>"/></td></tr>
	<tr><td>IdPersonne</td><td><input type='number' name='idPersonne' min='1' value="<?php if(isset($_GET['idPersonne'])) {echo $_GET['idPersonne'];} 
		else {echo '';} ?>"/></td></tr>
	<tr><td>Telephone</td><td><input type='number' name='tel'  value="<?php if(isset($_GET['tel'])) {echo $_GET['tel'];} else {echo '';} ?>"/></td></tr>
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