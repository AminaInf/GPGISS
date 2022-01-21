<html>
<head> 	
	<title>Punition</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleDeco.css">

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
<br/><br/><br/><br/>
<table border="3px" align="center" width="800px" rules="all">
	<caption>LISTE DES PUNITIONSAGENTS</caption>
	<tr align="left" border="2px">
		<th>IdPunition</th><th>Matricule</th><th>DatePunition</th>
	</tr>
	
<?php
	$liste=mysql_query("select idPunition,matricule,datePunition from punitionagent");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idPunition']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['datePunition']; ?></td>
		<td>
			<a href="modifierPunitionAgent.php?id=<?php echo $info['matricule']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
</body>
</html>
