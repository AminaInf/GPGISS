<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="stylec.css">

	</head>
<body><div id ="conteneur">
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
	<caption id="p">Liste des compagnies</caption>
	<tr align="left">
		<th>IdCompagnie</th><th>IdUnite</th><th>IdVille</th><th>NomCompagnie</th><th>Telephone</th><th>Email</th>
	</tr>
	
<?php
	$liste=mysql_query("select idCompagnie,idUnite,idVil,nomComp,telephone,email from compagnie");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idCompagnie']; ?></td>
		<td><?php echo $info['idUnite']; ?></td>
		<td><?php echo $info['idVil']; ?></td>
		<td><?php echo $info['nomComp']; ?></td>
		<td><?php echo $info['telephone']; ?></td>
		<td><?php echo $info['email']; ?></td>
		<td>
			<a href="modifierCompagnie.php?id=<?php echo $info['idCompagnie']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
</div>
</body>
</html>