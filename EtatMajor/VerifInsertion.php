<form method='POST' action='listeEM.php'>
	<table border='0'>
		<tr><td>IdEtatMajor</td><td><input type='number' name='id' value="<?php if(isset($_GET['id'])) {echo $_GET['id'];} else {echo '';} ?>"/></td></tr>
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