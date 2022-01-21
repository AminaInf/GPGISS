<br/><br/>
<html>
<head>
	
	<title>Moteur de Recherche</title>
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">
</head>
<body>
<br/><br/>
<h1 align="center" class="pt">Liste des agents punis</h1>
<?php
include('connexion.php');
?>
<br/>
<table border="2px" align="center" width="700px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Nature Punition</th><th>Duree Punition</th><th>Date Punition</th>
	</tr>
	
<?php
	$liste=mysql_query("select idPunition,idAgent,nature,duree,datePunition from punition");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nature']; ?></td>
		<td><?php echo $info['duree']; ?></td>
		<td><?php echo $info['datePunition']; ?></td>
	</tr>
	<?php
}
?>
</table>
<!--
<br/>
<table>
	<tr>
		<a href="saisiPunitionAg.php">Nouveau</a>&nbsp;&nbsp;
		<a href="recherchePunitionAgent.php">Rechercher</a>&nbsp;&nbsp;
		<a href="affichePunitionAgent.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>