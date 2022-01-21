<html>

<head>
	<meta charset="utf-8">
	<title>Secourisme</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="modif.css">
	</head>
<br/>
<body>
<h1 class="pt" align="center">Liste diplome secourisme des agents</h1>
<?php
include('connexion.php');
?>
<br/>
<table border="8px" align="center" width="400px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Type Secourisme</th><th>Date Secourisme</th>
	</tr>
	
<?php
	$liste=mysql_query("select idSecou,typeSecou,idAgent,dateSecourisme from diplomesecourisme");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['typeSecou']; ?></td>
		<td><?php echo $info['dateSecourisme']; ?></td>
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