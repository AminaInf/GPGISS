<html>
<head>
	<title>Diplome</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<br/>
<body>
<h1 class="pt" align="center">Liste des diplomes academiques et militaires des agents</h1>
<?php
include('connexion.php');
?>
<br/>
<table border="8px" align="center" width="500px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Nom Diplome</th>
	</tr>
	
<?php
	$liste=mysql_query("select idDip,idAgent,nomDip from diplome");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nomDip']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<!--
<table>
	<tr>
		<a href="saisiDipSecou.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheDipSecou.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheDipSecou.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>