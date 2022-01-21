<html>
<head>
	<meta charset="utf-8">
	<title>CNI</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylec.css">
</head>
<body><div id ="conteneur">
<?php
include('connexion.php');
	/*if(isset($_POST['Enregistrer']))
	{
		$numeroCNI=$_POST['numeroCNI'];
		$matricule=$_POST['matricule'];
		$dateDeliverance=$_POST['dateDeliverance'];
		$dateExpiration=$_POST['dateExpiration'];
		$photo=$_POST['photo'];
		$result=mysql_query("insert into cartedidentite (numeroCNI,idAgent,idPersonne,dateDeliverance,dateExpiration,photo) values
				('".$numeroCNI."','".$matricule."','".$dateDeliverance."','".$dateExpiration."','".$photo."')");
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
<table border="1" align="center" width="800px" rules="all">
	<caption id="p">Liste des carte d'identites</caption>
	<tr align="left">
		<th>NumeroCNI</th><th>Matricule</th><th>DateDeliverance</th><th>DateExpiration</th>
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
		
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiCarteIdentite.php">Nouveau</a></td></tr>&nbsp;&nbsp;
		<a href="rechercheCarteIdentite.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheCarteIdentite.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
	</div>
</body>
</html>