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
<form method='POST' action='listeAgent.php'>
	<table border='0' align="center">
	<tr><td>Matricule</td><td><input type='number' name='matricule' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdGrade</td><td><input type='number' name='idGrade' value="<?php if(isset($_GET['idGrade'])) {echo $_GET['idGrade'];} else {echo '';} ?>"/></td></tr>
	<tr><td>NumeroCNI</td><td><input type='number' name='numeroCNI' value="<?php if(isset($_GET['numeroCNI'])) {echo $_GET['numeroCNI'];} else {echo '';} ?>"/></td></tr>
	<tr><td>NumeroMutuel</td><td><input type='number' name='numeroMutuel' value="<?php if(isset($_GET['numeroMutuel'])) {echo $_GET['numeroMutuel'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdGSanguin</td><td><input type='number' name='idG' value="<?php if(isset($_GET['idG'])) {echo $_GET['idG'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdPermis</td><td><input type='number' name='idPermis' value="<?php if(isset($_GET['idPermis'])) {echo $_GET['idPermis'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdMajor</td><td><input type='number' name='id' value="<?php if(isset($_GET['id'])) {echo $_GET['id'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdCategorie</td><td><input type='number' name='idCat' value="<?php if(isset($_GET['idCat'])) {echo $_GET['idCat'];} else {echo '';} ?>"/></td></tr>
	<tr><td>CCPA</td><td><input type='number' name='ccpa' value="<?php if(isset($_GET['ccpa'])) {echo $_GET['ccpa'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateIncorporation</td><td><input type='date' name='datteIncorporation' value="<?php if(isset($_GET['datteIncorporation'])) {echo $_GET['datteIncorporation'];} else {echo '';} ?>"/></td></tr>
	<tr><td>LimiteAge</td><td><input type='date' name='limiteAge' value="<?php if(isset($_GET['limiteAge'])) {echo $_GET['limiteAge'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Prevention</td><td><input type='text' name='prevention' value="<?php if(isset($_GET['prevention'])) {echo $_GET['prevention'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Specialite</td><td><input type='text' name='specialite' value="<?php if(isset($_GET['specialite'])) {echo $_GET['specialite'];} else {echo '';} ?>"/></td></tr>
	<tr><td>NumeroCIM</td><td><input type='number' name='numeroCim' value="<?php if(isset($_GET['numeroCim'])) {echo $_GET['numeroCim'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Aptitude</td><td><input type='text' name='aptitude' value="<?php if(isset($_GET['aptitude'])) {echo $_GET['aptitude'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Numero</td><td><input type='number' name='numero' value="<?php if(isset($_GET['numero'])) {echo $_GET['numero'];} else {echo '';} ?>"/></td></tr>
	<tr><td>DateNomination</td><td><input type='date' name='dateNomination' value="<?php if(isset($_GET['dateNomination'])) {echo $_GET['dateNomination'];} else {echo '';} ?>"/></td></tr>
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