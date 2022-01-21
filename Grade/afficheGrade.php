<html>
<head>
	<title>interruption</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<body>
<br/>
<h1 class="pt" align="center">Liste nominative des grades</h1>
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
<br/>
<table border="8px" align="center" width="700px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Type Grade</th><th>Date Nomination</th><th>Action</th>
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
		<td>
			<a href="modifierGrade.php?id=<?php echo $info['idGrade']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>
</table>
<!--
<br/>
<table>
	<tr>
		<a href="listeGrade.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>