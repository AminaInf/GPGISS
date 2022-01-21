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
		 <tr><td>TypeSecourisme:</td><td><input type="text" name="typeSecou" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		//$idSecou=$_POST['idSecou'];
		$typeSecou=$_POST['typeSecou'];
		$result=mysql_query("insert into diplomesecourisme (idSecou,typeSecou) values ('','".$typeSecou."')");
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
		<a href="saisiDipSecou.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeDipSecou.php">Diplome Secourisme</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>
