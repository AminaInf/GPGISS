<html>
<head>
	<title>Grade</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<body>
<br/>
<h1 class="pt" align="center">Liste nominative des grades</h1>
<?php
include('connexion.php');
?>
<br/>
<table border="8px" align="center" width="500px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Type Grade</th><th>Date Nomination</th>
	</tr>
	
<?php
	$liste=mysql_query("select idGrade,idAgent,type,dateNomination from grade");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['type']; ?></td>
		<td><?php echo $info['dateNomination']; ?></td>
	</tr>
	<?php
}
?>

</table>

<!--
<br/>
<table>
	<tr>
		<a href="saisiGrade.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheGrade.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheGrade.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>