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
		<tr><td>Matricule:</td><td><input type="number" name="matricule" size="20px" min='1' /></td></tr>
		<tr><td>AnneeDecoration:</td><td><input type="date" name="anneeDeco" size="20px" /></td></tr>
		<tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	{
		//$idDeco=$_POST['idDeco'];
		$matricule=$_POST['matricule'];
		$anneeDeco=$_POST['anneeDeco'];
		
		$result=mysql_query("insert into decoagent (idDeco,matricule,anneeDeco) values ('','".$matricule."','".$anneeDeco."')");
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
<br/>
<table>
	<tr>
		<a href="saisiDecoAg.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeDecoAgent.php">Decoration Agent</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>
