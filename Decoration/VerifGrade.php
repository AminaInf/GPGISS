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
<form method='POST' action='listeGrade.php'>
	<table border='0'>
	<tr><td>IdGrade</td><td><input type='number' name='idGrade' value="<?php if(isset($_GET['idGrade'])) {echo $_GET['idGrade'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Type</td><td><input type='text' name='type' value="<?php if(isset($_GET['type'])) {echo $_GET['type'];} else {echo '';} ?>"/></td></tr>
	
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