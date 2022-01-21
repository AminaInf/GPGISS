<html>
<head> 	
	<title>Decoration</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">
</head>
<body>
<br>
<h1 id="p" align="center">Liste decoration des agents</h1>
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
<table border="8px" align="center" width="700px" rules="all" class="tab">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Decoration</th><th>Annee Decoration</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idDeco,typeDeco,anneeDeco,idAgent from decoration");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['typeDeco']; ?></td>
		<td><?php echo $info['anneeDeco']; ?></td>
		<td>
			<a href="modifierDecoration.php?id=<?php echo $info['idDeco']; ?>" style="text-decoration:none" >Modifier</a>&nbsp;&nbsp;
		</td>
	</tr>
<?php
}
?>
</table>
</body>
</html>