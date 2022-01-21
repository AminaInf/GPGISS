<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="cssCom.css">

	</head>
<br/><br/>
<body>
<h1 class="pt" align="center">Liste des agents de la 21 CIS</h1>
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
		<th>Agent</th><th>Nom</th><th>Prenom</th><th>DateNaiss</th><th>LieuNaiss</th><th>Matricule</th><th>NomUnite</th><th>NumeroCNI</th><th>Specialite</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idAgent,nom,prenom,dateNaiss,lieuNaiss,matricule,nomUnite,numeroCNI,specialite from gpgiss.agentcomp where nomUnite='21 CIS' ");
	while($info=mysql_fetch_array($liste))
	{
?>

	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['dateNaiss']; ?></td>
		<td><?php echo $info['lieuNaiss']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['nomUnite']; ?></td>
		<td><?php echo $info['numeroCNI']; ?></td>
		<td><?php echo $info['specialite']; ?></td>
		<td>
			<a href="modifierA21cis.php?id=<?php echo $info['idAgent']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
	</tr>

<?php
}
?>
</table>
</body>
</html>