<html>
	<head>
	<meta charset="utf-8">
	<title>Categorie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="modif.css">
	</head>
<body>
<br/>
<h1 class="pt" align="center">Liste de categorie des agents</h1>
<?php
include('connexion.php');
?>
<br/>
<table border="8px" align="center" width="500px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>NomCategorie</th>
	</tr>
	
<?php
	$liste=mysql_query("select idCat,nomCategorie,idAgent from categorie");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nomCategorie']; ?></td>
	</tr>
	<?php
}
?>

</table>
<!--
<br/>
<table>
	<tr>
		<a href="saisiCategorie.php">Nouveau</a></td></tr>&nbsp;&nbsp;
		<a href="rechercheCategorie.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheCategorie.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>