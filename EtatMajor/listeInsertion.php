<table border='1'>
<form method='POST' action='listeMajor.php'>
<tr><td>IdMajor</td><td><input type='number' name='id' value="<?php if(isset($_GET['id'])) {echo $_GET['id'];} else {echo '';} ?>"/></td></tr>
<tr><td><input type='submit' name='Enregistrer' value='Enregistrer'></td><br></tr>
</form>
</table>
<?php
	session_start();
	//recuperation des messages d'erreur
	if(isset($_GET['vide']))
	{
		echo "<font color='red'>".$_GET['vide']."</font color>";
	}
?>