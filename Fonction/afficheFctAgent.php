	<html>
	<head>
		<title>Fonction</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" href="stylFonction.css"/>

	</head>
<body>
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
<br/><br/><br/><br/>
<table border="3px" align="center" width="800px" rules="all">
	<caption class="p">LISTE DES FONCTIONSAGENTS</caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>IdFonction</th><th>DateDebut</th><th>DateFin</th>
	</tr>
	
<?php
	$liste=mysql_query("select matricule,idFonction,dateDebut,dateFIN from fonctionagent");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idFonction']; ?></td>
		<td><?php echo $info['dateDebut']; ?></td>
		<td><?php echo $info['dateFIN']; ?></td>
		<td>
			<a href="modifierFctAgent.php?id=<?php echo $info['matricule']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
</div>
</body>
</html>