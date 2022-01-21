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
	
	<tr><td>IdUnite</td><td><input type='number' name='idUnite' value="<?php if(isset($_GET['idUnite'])) {echo $_GET['idUnite'];} else {echo '';} ?>"/></td></tr>
	<tr><td>IdVille</td><td><input type='number' name='idVil' value="<?php if(isset($_GET['idVil'])) {echo $_GET['idVil'];} else {echo '';} ?>"/></td></tr>
	<tr><td>NomCompagnie</td><td><input type='text' name='nomComp' value="<?php if(isset($_GET['nomComp'])) {echo $_GET['nomComp'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Telephone</td><td><input type='number' name='telephone' value="<?php if(isset($_GET['telephone'])) {echo $_GET['telephone'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Email</td><td><input type='text' name='email' value="<?php if(isset($_GET['email'])) {echo $_GET['email'];} else {echo '';} ?>"/></td></tr>
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