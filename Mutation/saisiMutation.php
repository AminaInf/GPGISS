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
<?php
session_start();
?>
<br/><br/><br/><br/>
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>Matricule:</td><td><input type="number" name="matricule" min='1' size="20px" /></td></tr>
		 <tr><td>IdCompagnie:</td><td><input type="number" name="idCompagnie" min='1' size="20px" /></td></tr>
		 <tr><td>ReferenceMutation:</td><td><input type="text" name="refMutt" min='1' size="20px" /></td></tr>
		 <tr><td>DateMutation:</td><td><input type="date" name="dateMut" size="20px" /></td></tr>
		 <tr><td>NombreMutation:</td><td><input type="number" name="nbreMutation" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$matricule=$_POST['matricule'];
		$idCompagnie=$_POST['idCompagnie'];
		$refMutt=$_POST['refMutt'];
		$dateMut=$_POST['dateMut'];
		$nbreMutation=$_POST['nbreMutation'];
		$result=mysql_query("insert into mutation (matricule,idCompagnie,refMutt,dateMut,nbreMutation) values ('".$matricule."','".$idCompagnie."','".$refMutt."','".$dateMut."',
									'".$nbreMutation."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}

?>
<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
<table>
	<tr>
		<a href="saisiMutation.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeMutation.php">Mutation</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>
