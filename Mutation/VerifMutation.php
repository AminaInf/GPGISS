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
<form method='POST' action='listeMutation.php'>
	<table border='0'  width="500px" cellpadding="10px" align="center" >
	<tr><td>Matricule</td><td><input type='number' name='matricule' min='1' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdCompagnie</td><td><input type='number' name='idCompagnie' min='1' value="<?php if(isset($_GET['idCompagnie'])) {echo $_GET['idCompagnie'];} else {echo '';} ?>"/></td></tr>
	<tr><td>ReferenceMutation</td><td><input type='number' name='refMutt' min='1' value="<?php if(isset($_GET['refMutt'])) {echo $_GET['refMutt'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateMutation</td><td><input type='date' name='dateMut' value="<?php if(isset($_GET['dateMut'])) {echo $_GET['dateMut'];} else {echo '';} ?>"/></td></tr> 
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