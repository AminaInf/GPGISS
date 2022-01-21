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
		 <tr><td>IdInt:</td><td><input type="number" name="idInt" min='1' size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$matricule=$_POST['matricule'];
		$idInt=$_POST['idInt'];
			$result=mysql_query("insert into lier (matricule,idInt) values('".$matricule."','".$idInt."')");
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
		<a href="saisiLier.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeLier.php">Liaison</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>