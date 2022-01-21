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
		 <tr><td>IdCentre:</td><td><input type="number" name="idCentre" min='1' size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$matricule=$_POST['matricule'];
		$idCentre=$_POST['idCentre'];
				$result=mysql_query("insert into etreliee (matricule,idCentre) values ('".$matricule."','".$idCentre."')");
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
<br/>
<table>
	<tr>
		<a href="saisiLiaison.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeLiaison.php">LiaisonAgent</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>
