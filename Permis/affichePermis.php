
<html>
<head> 	
	<title>Permis</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<?php
session_start();
/*
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/
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
<br/><br/><br/>
<table border="3px" align="center" width="800px" rules="all">
	<caption>LISTE DES PERMIS</caption>
	<tr align="left" border="2px">
		<th>numeroPermis</th><th>Type</th><th>Duree</th><th>Etat</th>
	</tr>
	
<?php
	$liste=mysql_query("select numeroPermis,type,duree,etat from permis");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['numeroPermis']; ?></td>
		<td><?php echo $info['type']; ?></td>
		<td><?php echo $info['duree']; ?></td>
		<td><?php echo $info['etat']; ?></td>
		<td>
			<a href="modifierPermis.php?id=<?php echo $info['numeroPermis']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>
</table>

</body>
</html>