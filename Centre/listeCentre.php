<html>
	<head>
	
	<title>Centre</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			<link rel="stylesheet" href="style.css">
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
	/*if(isset($_POST['Enregistrer']))
	{
		//$idCentre=$_POST['idCentre'];
		$idVil=$_POST['idVil'];
		$nomCentre=$_POST['nomCentre'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$result=mysql_query("insert into centre (idCentre,idVil,nomCentre,telephone,email) values ('".$idCentre."','".$idVil."','".$nomCentre."','".$telephone."','".$email."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectue</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}*/
?>
<br/><br/>
<table border="2" align="center" width="800px" rules="all" class="tab">
<br/><br/>
	<caption id="p">Liste des centres </caption>
	<tr align="left">
		<th>IdCentre</th><th>IdVille</th><th>NomCentre</th><th>Telephone</th><th>Email</th>
	</tr>
	
<?php
	$liste=mysql_query("select idCentre,idVil,nomCentre,telephone,email from centre");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idCentre']; ?></td>
		<td><?php echo $info['idVil']; ?></td>
		<td><?php echo $info['nomCentre']; ?></td>
		<td><?php echo $info['telephone']; ?></td>
		<td><?php echo $info['email']; ?></td>
		
	</tr>
<?php
}
?>

</table>
<br/>
<table>
<tr> 
	<a href="saisiCentre.php">Nouveau</a>&nbsp;&nbsp;
	<a href="rechercheCentre.php">Rechercher</a>&nbsp;&nbsp;
	<a href="afficheCentre.php">Modifier</a>&nbsp;&nbsp;
</tr>
</table>
	</body>
</html>