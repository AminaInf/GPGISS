<html>
	<head>
	<meta charset="utf-8">
	<title>Categorie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="modif.css">
	</head>

<body>
<br/>
<h1 class="pt" align="center">Liste de catgorie des agents</h1>
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
<table border="8px" align="center" width="600px" rules="all">
	<tr align="center" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>NomCategorie</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idCat,nomCategorie,idAgent from categorie");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nomCategorie']; ?></td>
		<td>
			<a href="modifierCategorie.php?id=<?php echo $info['idCat']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table> 
</body>
</html>