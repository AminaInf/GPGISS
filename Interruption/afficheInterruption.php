<br/>
<html>
<head>
	<title>interruption</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<body>
<br/>
<h1 class="pt" align="center">Liste interruption des agents</h1>
<?php
session_start();
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
		<th>Matricule</th><th>Date Debut</th><th>DRDS</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idInt,dateDebut,drds,idAgent from interruption");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['dateDebut']; ?></td>
		<td><?php echo $info['drds']; ?></td>
		<td>
			<a href="modifierInterruption.php?id=<?php echo $info['idInt']; ?>" style="text-decoration:none" id="a">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>
<!--
<table>
	<tr>
		<a href="listeInterruption.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>
</table>
-->
</body>
</html>