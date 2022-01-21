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
<form method='POST' action='listeGSanguin.php'>
	<table border='0'>
	<tr><td>IdGSanguin</td><td><input type='number' name='idG' value="<?php if(isset($_GET['idG'])) {echo $_GET['idG'];} else {echo '';} ?>"/></td></tr>
	<tr><td>LibelleGSanguin</td><td><input type='text' name='libelleG' value="<?php if(isset($_GET['libelleG'])) {echo $_GET['libelleG'];} else {echo '';} ?>"/></td></tr>
	
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