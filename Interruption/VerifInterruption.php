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
<form method='POST' action='listeInterruption.php'>
	<table border='0'>
	<tr><td>IdInterruption</td><td><input type='number' name='idInt' value="<?php if(isset($_GET['idInt'])) {echo $_GET['idInt'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateDebut</td><td><input type='date' name='dateDebut' value="<?php if(isset($_GET['dateDebut'])) {echo $_GET['dateDebut'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateRectDepart</td><td><input type='date' name='drds' value="<?php if(isset($_GET['drds'])) {echo $_GET['drds'];} else {echo '';} ?>"/></td></tr>
	
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