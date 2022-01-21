<html>
<head>
	<meta charset="utf-8">
	<title>Moteur de Recherche</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="styleRc.css">
</head>
<body>
<div id ="conteneur">
<?php
session_start();
?>
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	{
		//$id=$_POST['id'];
		$result=mysql_query("insert into etatmajor (id) values ('')");
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
		<a href="saisiEM.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeEM.php">Etat Major</a>&nbsp;&nbsp;
	</tr>
</table>
</div>
</body>
</html>
