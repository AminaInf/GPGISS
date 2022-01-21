<html>
<head> 	
	<title>Punition</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<br/><br/>
<h1 align="center" class="pt">Liste des agents punis</h1>
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
<table border="2px" align="center" width="700px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Nature Punition</th><th>Duree Punition</th><th>Date Punition</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idPunition,idAgent,nature,duree,datePunition from punition");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nature']; ?></td>
		<td><?php echo $info['duree']; ?></td>
		<td><?php echo $info['datePunition']; ?></td>
		<td>
			<a href="modifierPunition.php?id=<?php echo $info['idPunition']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>
<!--
<table>
	<tr>
		<a href="listePunition.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</table>
</body>
</html>