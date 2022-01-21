<html>
<head> 	
	<title>localite</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleLocal.css">

</head>
<body>
<?php
include('connexion.php');
	/*if(isset($_POST['Enregistrer']))
	
	{
		$idVil=$_POST['idVil'];
		$nomVil=$_POST['nomVil'];
		$population=$_POST['population'];
				if(empty($_POST['idVil']) || empty($_POST['nomVil']) || empty($_POST['population']))
				{
					header('location:VerifLocalite.php?vide=veuillez remplir tous les champs&idVil='.$idVil.'&nomVil='.$nomVil.'&population='.$population);
					exit();
				}
	
				$result=mysql_query("insert into localite (idVil,nomVil,population) values
						('".$idVil."','".$nomVil."','".$population."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}*/

?>
<br/><br/><br/><br/>
<table border="2px" align="center" width="500px" rules="all">
	<caption ></caption>
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
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiLocalite.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheLocalite.php" id="a2">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheLocalite.php" id="a3">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>