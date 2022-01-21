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
<br/><br/><br/><br/>
<form method='POST' action='listeDecoAgent.php'>
	<table border='0' width="500px" cellpadding="10px" align="center">
	<br/><br/><br/>
	<tr><td>Decoration:</td><td><input type='number' name='idDeco' value="<?php if(isset($_GET['idDeco'])) {echo $_GET['idDeco'];} else {echo '';} ?>"/></td></tr>
	<tr><td>Matricule:</td><td><input type='number' name='matricule' value="<?php if(isset($_GET['matricule'])) {echo $_GET['matricule'];} else {echo '';} ?>"/></td></tr>
	<tr><td>AnneeDecoration:</td><td><input type='date' name='anneeDeco' size="20px" value="<?php if(isset($_GET['anneeDeco'])) {echo $_GET['anneeDeco'];} else {echo '';} ?>"/></td></tr>
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