<html>
	<head>
	<title>Diplome</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<body>
<br/>
<h1 class="pt" align="center">Liste des diplomes academiques et militaire des agents</h1>
	<div id ="conteneur">
<?php
session_start();
/*
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/
?>
<?php
	include('connexion.php');
?>

<?php
/* message de succes pour modification */
 if(isset($_GET['mod']))
 	{
 		echo "<font color='green' size='4'><p align='center'>".$_GET['mod']."</p></font>";
 	}
?>
<br/>
<table border="8px" align="center" width="800px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Nom Diplome</th><th>Matricule</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idDip,nomDip,idAgent from diplome");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['nomDip']; ?></td>
		<td><?php echo $info['idAgent']; ?></td>
		<td>
			<a href="modifierDiplome.php?id=<?php echo $info['idDip']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
	</div>
</body>
</html>