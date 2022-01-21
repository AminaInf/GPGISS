<html>
<head>
	<title>Decoration</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<body>
<br>
<h1 id="p" align="center">Liste decoration des agents</h1>
<?php
include('connexion.php');

?>
<br/>
<table border=8px" align="center" width="600px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Decoration</th><th>Annee Decoration</th>
	</tr>
	
<?php
	$liste=mysql_query("select idDeco,typeDeco,idAgent,anneeDeco from decoration");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['typeDeco']; ?></td>
		<td><?php echo $info['anneeDeco']; ?></td>
	</tr>
	<?php
}
?>

</table>
<!--
<br/>
<table>
	<tr>
		<a href="saisiDecoration.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheDecoration.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheDecoration.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>