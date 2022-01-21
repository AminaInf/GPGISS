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
<form method='POST' action='listeMutuel.php'>
	<table border='0' width="500px" cellpadding="10px" align="center">
	<tr><td>NumeroMutuel</td><td><input type='number' name='numeroMutuel' size="20px" min '1' value="<?php if(isset($_GET['numeroMutuel']))
	{echo $_GET['numeroMutuel'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateCreation</td><td><input type='date' name='dateCreation' value="<?php if(isset($_GET['dateCreation'])) 
	{echo $_GET['dateCreation'];} else {echo '';} ?>"/></td></tr>
	
	
	
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