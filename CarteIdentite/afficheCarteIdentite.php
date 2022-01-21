<html>
<head>
	<meta charset="utf-8">
	<title>modifier un centre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylec.css">
</head>
<body><div id ="conteneur">
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
<table border="1" align="center" width="800px" rules="all">
	<caption></caption>
	<tr align="center">
		<th>NumeroCNI</th><th>Matricule</th><th>DateDeliverance</th><th>DateExpiration</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select numeroCNI,idAgent,dateDeliverance,dateExpiration from cartedidentite");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['numeroCNI']; ?></td>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['dateDeliverance']; ?></td>
		<td><?php echo $info['dateExpiration']; ?></td>
		<td>
			<a href="modifierCarteIdentite.php?id=<?php echo $info['numeroCNI']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table> 
</div>
</body>
</html>