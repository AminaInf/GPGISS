<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">

a{font-size: 20px;
color: red;
}


</style>
</head>
<body>
<?php
include('connexion.php');
	/*if(isset($_POST['Enregistrer']))
	
	{
		$idG=$_POST['idG'];
		$libelleG=$_POST['libelleG'];
				if(empty($_POST['idG']) || empty($_POST['libelleG']))
				{
					header('location:VerifGSanguin.php?vide=veuillez remplir tous les champs&idG='.$idG.'&libelleG='.$libelleG);
					exit();
				}
	
				$result=mysql_query("insert into groupesanguin (idG,libelleG) values
						('".$idG."','".$libelleG."')");
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
<IMG SRC="../im/gs.png"  width=100px height= 250px id="im">
<table border="2px" align="center" width="500px" rules="all">
	<caption>LISTE DES GROUPES SANGUINS</caption>
	<tr align="left" border="1px">
		<th>IdGSanguin</th><th>LibelleGSanguin</th>
	</tr>
	
<?php
	$liste=mysql_query("select idG,libelleG from groupesanguin");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idG']; ?></td>
		<td><?php echo $info['libelleG']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiGSanguin.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheGSanguin.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheGSanguin.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>