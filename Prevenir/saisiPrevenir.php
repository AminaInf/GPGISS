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
<br/><br/><br/>
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>Matricule:</td><td><input type="number" name="matricule" min='1' size="35px" /></td></tr>
		 <tr><td>IdPersonne:</td><td><input type="number" name="idPersonne" min='1' size="20px" /></td></tr>
		 <tr><td>Telephone:</td><td><input type="text" name="tel" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$matricule=$_POST['matricule'];
		$idPersonne=$_POST['idPersonne'];
		$tel=$_POST['tel'];
			$result=mysql_query("insert into prevenir (matricule,idPersonne,tel) values('".$matricule."','".$idPersonne."','".$tel."')");
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
		<a href="saisiPrevenir.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listePrevenir.php">ListePrevenir</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>