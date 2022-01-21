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
<form method='POST' action='listeCompagnie.php'>
	<table border='0' width="500px" cellpadding="10px" align="center">
	<br/><br/><br/>
	<tr><td>Contrat:</td><td><input type='number' name='idContrat' value="<?php if(isset($_GET['idContrat'])) {echo $_GET['idContrat'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdPersonne:</td><td><input type='number' name='idPersonne' value="<?php if(isset($_GET['idPersonne'])) {echo $_GET['idPersonne'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Matricule:</td><td><input type='number' name='matricule' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DebutContrat:</td><td><input type='date' name='debutContrat' value="<?php if(isset($_GET['debutContrat'])) {echo $_GET['debutContrat'];} else {echo '';} ?>"/></td></tr>
	<tr><td>FinContrat:</td><td><input type='date' name='finContrat' value="<?php if(isset($_GET['finContrat'])) {echo $_GET['finContrat'];} else {echo '';} ?>"/></td></tr>
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