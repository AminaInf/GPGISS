<?php
/* 
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/

?>
<html>
<head>
</head>
<body>
<form method='POST' action='listeDecoration.php'>
	<table border='0' width="500px" cellpadding="10px" align="center">
	<br/><br/><br/>
	<tr><td>typeDecoration:</td><td>
		<select name="typeDeco" name='typeDeco' value="<?php if(isset($_GET['typeDeco'])) {echo $_GET['typeDeco']; } else {echo '';} ?>"/>>
				<option value="MEDAILLE D'HONNEUR SP">MEDAILLE D'HONNEUR SP</option>
				<option value="MEDAILLE MILITAIRE">MEDAILLE MILITAIRE</option>
				<option value="CHEVALIER ORDRE DU MERITE">CHEVALIER ORDRE DU MERITE</option>
				<option value="OFFICIER ORDRE DU MERITE">OFFICIER ORDRE DU MERITE</option>
				<option value="COMMANDEUR ORDRE DU MERITE">COMMANDEUR ORDRE DU MERITE</option>
				<option value="CHEVALIER ORDRE NATIONAL DU LION">CHEVALIER ORDRE NATIONAL DU LION</option> 
				<option value="OFFICIER ORDRE NATIONAL DU LION">OFFICIER ORDRE NATIONAL DU LION</option>
				<option value="COMMANDEUR ORDRE NATIONAL DU LION">COMMANDEUR ORDRE NATIONAL DU LION</option>
			</select>
		</td></tr>
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