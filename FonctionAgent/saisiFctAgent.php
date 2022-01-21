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
		 <tr><td>IdFonction:</td><td><input type="text" name="idFonction" size="20px" /></td></tr>
		 <tr><td>DateDebut:</td><td><input type="date" name="dateDebut" size="35px" /></td></tr>
		 <tr><td>DateFin:</td><td><input type="date" name="dateFIN" size="35px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
		 
	</table>
</form>

<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$matricule=$_POST['matricule'];
		$idFonction=$_POST['idFonction'];
		$dateDebut=$_POST['dateDebut'];
		$dateFIN=$_POST['dateFIN'];
		$result=mysql_query("insert into fonctionagent (matricule,idFonction,dateDebut,dateFIN) values('".$matricule."','".$idFonction."','".$dateDebut."','".$dateFIN."')");
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
		<a href="saisiFctAgent.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeFctAgent.php">FonctionAgent</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>
