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
<form method='POST' action='listePesonne.php'>
	<table border='0'>
	<tr><td>IdPersonne</td><td><input type='number' name='idPersonne' value="<?php if(isset($_GET['idPersonne'])) {echo $_GET['idPersonne'];} else {echo '';} ?>"/></td></tr>
	<tr><td>AgentEpoux</td><td><input type='number' name='AgentEpoux_idPers' value="<?php if(isset($_GET['AgentEpoux_idPers'])) {echo $_GET['AgentEpoux_idPers'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Matricule</td><td><input type='number' name='matricule' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>AgentPere</td><td><input type='number' name='AgentPere_idPers' value="<?php if(isset($_GET['AgentPere_idPers'])) {echo $_GET['AgentPere_idPers'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Agentmatricule</td><td><input type='number' name='Age_matricule' value="<?php if(isset($_GET['Age_matricule'])) {echo $_GET['Age_matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Nom</td><td><input type='text' name='nom' value="<?php if(isset($_GET['nom'])) {echo $_GET['nom'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Prenom</td><td><input type='text' name='prenom' value="<?php if(isset($_GET['prenom'])) {echo $_GET['prenom'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateNaissance</td><td><input type='date' name='dateNaiss' value="<?php if(isset($_GET['dateNaiss'])) {echo $_GET['dateNaiss'];} else {echo '';} ?>"/></td></tr>
	<tr><td>LieuNaissance</td><td><input type='text' name='lieuNaiss' value="<?php if(isset($_GET['lieuNaiss'])) {echo $_GET['lieuNaiss'];} else {echo '';} ?>"/></td></tr>
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