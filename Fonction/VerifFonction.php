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
<form method='POST' action='listeFonction.php'>
	<table border='0'>
	<tr><td>IdFonction</td><td><input type='text' name='idFonction' value="<?php if(isset($_GET['idFonction'])) {echo $_GET['idFonction'];} else {echo '';} ?>"/></td></tr>
	<tr><td>TypeFonction</td><td><input type='text' name='typeFonction' value="<?php if(isset($_GET['typeFonction'])) {echo $_GET['typeFonction'];} else {echo '';} ?>"/></td></tr>
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