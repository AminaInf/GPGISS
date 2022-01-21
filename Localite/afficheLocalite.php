<html>
<head> 	
	<title>localite</title>
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
<br/><br/><br/><br/>
<table border="3px" align="center" width="800px" rules="all">
	<caption>LISTE DES LOCALITES</caption>
	<tr align="left" border="2px">
		<th>NomVille</th><th>Population</th>
	</tr>
	
<?php
	$liste=mysql_query("select nomVil,population from localite");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['nomVil']; ?></td>
		<td><?php echo $info['population']; ?></td>
		<td>
			<a href="modifierLocalite.php?id=<?php echo $info['nomVil']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>

</body>
</html>