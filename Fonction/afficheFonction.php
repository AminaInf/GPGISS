<br/>
<html>
	<head>
		<title>Fonction</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" href="stylFonction.css"/>

	</head>
<body>
<br/>
<h1 class="pt" align="center">Liste de fonction des agents</h1>
	<div id ="conteneur">
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
		<th>Matricule</th><th>Type Fonction</th><th>Date Debut</th><th>Date Fin</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idFonction,typeFonction,idAgent,dateDebut,dateFin from fonction");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['typeFonction']; ?></td>
		<td><?php echo $info['dateDebut']; ?></td>
		<td><?php echo $info['dateFin']; ?></td>
		<td>
			<a href="modifierfonction.php?id=<?php echo $info['idFonction']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
</div>
</body>
</html>
