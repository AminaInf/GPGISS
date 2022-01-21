<br/><br/>
<html>
<head>
	<title>interruption</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<body>
<h1 id="p" align="center">Liste interruption des agents</h1>
<?php
include('connexion.php');

?>
<br/>
<table border="8px" align="center" width="700px" rules="all">
	<tr align="center" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Date Debut</th><th>DRDS</th>
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
	</tr>
	<?php
}
?>

</table>
<br/>
<!--
<table>
	<tr>
		<a href="rechercheIntKhombole.php" id="a1">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheIntKhombole.php" id="a2">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>