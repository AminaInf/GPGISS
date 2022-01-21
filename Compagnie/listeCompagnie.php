<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
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
	/*if(isset($_POST['Enregistrer']))
	{
		$idCompagnie=$_POST['idCompagnie'];
		$idUnite=$_POST['idUnite'];
		$idVil=$_POST['idVil'];
		$nomComp=$_POST['nomComp'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		
		if(empty($_POST['idUnite']) || empty($_POST['idVil']) || empty($_POST['nomComp']) ||
								empty($_POST['telephone']) || empty($_POST['email']) )
				{
					header('location:VerifCompagnie.php?vide=veuillez remplir tous les champs&idUnite='.$idUnite.'&idVil='.$idVil.
					'&nomComp='.$nomComp.'&telephone='.$telephone.'&email='.$email);
					exit();
				}
		$result=mysql_query("insert into compagnie (idCompagnie,idUnite,idVil,nomComp,telephone,email) values ('','".$idUnite."','".$idVil."','".$nomComp."','".$telephone."','".$email."')");
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

<table border="1" align="center" width="800px" rules="all" class="tab">
	<caption id="p">LISTE DES COMPAGNIES</caption>
	<tr align="left">
		<th>IdUnite</th><th>IdVille</th><th>NomCompagnie</th><th>Telephone</th><th>Email</th>
	</tr>
	
	
<?php
	$liste=mysql_query("select idCompagnie,idUnite,idVil,nomComp,telephone,email from compagnie");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idUnite']; ?></td>
		<td><?php echo $info['idVil']; ?></td>
		<td><?php echo $info['nomComp']; ?></td>
		<td><?php echo $info['telephone']; ?></td>
		<td><?php echo $info['email']; ?></td>
	</tr>
	
<?php
}
?>
</table>
<br/>
<table border ='2px' width="2px" align="left" rules="all">
<tr>
	<a href="saisiCompagnie.php">Nouveau</a>&nbsp;&nbsp;
	<a href="rechercheCompagnie.php">Rechercher</a>&nbsp;&nbsp;
	<a href="afficheCompagnie.php">Modifier</a>&nbsp;&nbsp;
</tr>
</table>
</div>
</body>
</html>

    