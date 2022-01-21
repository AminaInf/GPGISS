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
		 <tr><td>IdPunition:</td><td><input type="number" name="idPunition" min ='1' size="35px" /></td></tr>
		 <tr><td>Matricule:</td><td><input type="number" name="matricule" min='1' size="20px" /></td></tr>
		 <tr><td>DatePunition:</td><td><input type="date" name="datePunition" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$idPunition=$_POST['idPunition'];
		$matricule=$_POST['matricule'];
		$datePunition=$_POST['datePunition'];
			$result=mysql_query("insert into punitionagent (idPunition,matricule,datePunition) values('".$idPunition."','".$matricule."','".$datePunition."')");
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
<table>
	<tr>
		<a href="saisiPunitionAg.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listePunitionAg.php">PunitionAgent</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>