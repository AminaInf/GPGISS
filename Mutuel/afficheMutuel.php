<html>
<head> 	
	<title>Mutuel</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleLocal.css">

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
	<caption>LISTE DES MUTUELS</caption>
	<tr align="left" border="2px">
		<th>NumeroMutuel</th><th>DateCreation</th>
	</tr>
	
<?php
	$liste=mysql_query("select numeroMutuel,dateCreation from mutuel");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['numeroMutuel']; ?></td>
		<td><?php echo $info['dateCreation']; ?></td>
		<td>
			<a href="modifierMutuel.php?id=<?php echo $info['dateCreation']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
</body>
</html>