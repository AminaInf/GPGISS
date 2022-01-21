<html>
	<head> 	
	<title>Famille</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<br/><br/>
<h1 align="center" class="pt">Liste de la famille d'un agent</h1>
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
<table border="8px" align="center" width="900px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Agent</th><th>Nom</th><th>Prenom</th><th>DateNaissance</th><th>LieuNaissance</th><th>Tel</th><th>Adresse</th><th>Profil</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idPersonne,idAgent,nom,prenom,dateNaiss,lieuNaiss,profil,tel,adresse from personne");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr align="center">
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['dateNaiss']; ?></td>
		<td><?php echo $info['lieuNaiss']; ?></td>
		<td><?php echo $info['tel']; ?></td>
		<td><?php echo $info['adresse']; ?></td>
		<td><?php echo $info['profil']; ?></td>
		<td>
			<a href="modifierPesonne.php?id=<?php echo $info['idPersonne']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>
</table>

</body>
</html>