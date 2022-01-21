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
<form method='POST' action='listeLocalite.php'>
	<table border='0'>
	<tr><td>IdVille</td><td><input type='number' name='idVil' value="<?php if(isset($_GET['idVil'])) {echo $_GET['idVil'];} else {echo '';} ?>"/></td></tr>
	<tr><td>NomVille</td><td><input type='text' name='nomVil' value="<?php if(isset($_GET['nomVil'])) {echo $_GET['nomVil'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Population</td><td><input type='text' name='population' value="<?php if(isset($_GET['population'])) {echo $_GET['population'];} else {echo '';} ?>"/></td></tr>
	
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