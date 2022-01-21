<?php
/* 
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/

?>
<html>
<head>
	<title>mutation</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="ref.css"/>
	</head>
<body>
<div id ="conteneur"> 
<br/><br/>
<h1 class="pt" align="center">Veuillez choisir une référence de mutation pour l'agent qui doit être muté </h1>

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
<br/><br/><br/>
<table border="8px" align="center" width="800px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Agent</th><th>Nom</th><th>Prenom</th><th>DateNaiss</th><th>LieuNaiss</th><th>Matricule</th><th>NomUnite</th><th>NumeroCNI</th><th>Specialite</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idAgent,nom,prenom,dateNaiss,lieuNaiss,matricule,nomUnite,numeroCNI,specialite from gpgiss.agentcomp where nomUnite='23 CIS'");
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
			<a href="refMutation23cis.php?id=<?php echo $info['idAgent']; ?>" style="text-decoration:none">Choisir RefMut</a>&nbsp;&nbsp;
		</td>
		
		
		
	</tr>
<?php
}
?>
</table>
<br/>
</body>
</html>