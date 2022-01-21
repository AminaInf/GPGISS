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
<form method='POST' action='listeCategorie.php'>
	<table border='0' align="center">
	<tr><td>IdCategorie</td><td><input type='number' name='idCat' value="<?php if(isset($_GET['idCat'])) {echo $_GET['idCat'];} else {echo '';} ?>"/></td></tr>
	<tr><td>NomCategorie</td><td><input type='text' name='nomCategorie' value="<?php if(isset($_GET['nomCategorie'])) {echo $_GET['nomCategorie'];} else {echo '';} ?>"/></td></tr>
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