<html>
	<head>
	
	<title>Centre</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			<link rel="stylesheet" href="style.css">
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

<table border="1" align="center" width="800px" rules="all" class="tab">
	<caption id="p2">Liste des centres</caption>
	<tr align="left">
		<th>IdCentre</th><th>IdVille</th><th>NomCentre</th><th>Telephone</th><th>Email</th>
	</tr>
	
<?php
	$liste=mysql_query("select idCentre,idVil,nomCentre,telephone,email from centre");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idCentre']; ?></td>
		<td><?php echo $info['idVil']; ?></td>
		<td><?php echo $info['nomCentre']; ?></td>
		<td><?php echo $info['telephone']; ?></td>
		<td><?php echo $info['email']; ?></td>
		<td>
			<a href="modifierCentre.php?id=<?php echo $info['idCentre']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>

</body>
</html>