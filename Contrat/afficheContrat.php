<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="styleContrat.css"/>
	</head>
<body>
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

<table border="3px" align="center" width="800px" rules="all" class="tab">
	<caption id="p">Liste des contrats</caption>
	<tr align="left" border="2px">
		<th>Contrat</th><th>Matricule</th><th>DebutContrat</th><th>FinContrat</th>
	</tr>
	
<?php
	$liste=mysql_query("select idContrat,idAgent,debutContrat,finContrat from contrat");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idContrat']; ?></td>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['debutContrat']; ?></td>
		<td><?php echo $info['finContrat']; ?></td>
		<td>
			<a href="modifierContrat.php?id=<?php echo $info['idContrat']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
</body>
</html>