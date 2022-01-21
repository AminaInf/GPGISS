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
		$idDip=$_POST['idDip'];
		$idPersonne=$_POST['idPersonne'];
		$matricule=$_POST['matricule'];
		//verifier les champs
		if(empty($_POST['idDip']) || empty($_POST['idPersonne']) || empty($_POST['matricule']))
			{
				header('location:VerifADiplome.php?vide=veuillez remplir tous les champs&idDip='.$idDip.'&idPersonne='.$idPersonne.'&matricule='.$matricule);
				exit();
			}
	
		$result=mysql_query("insert into association7 (idDip,idPersonne,matricule) values ('".$idDip."','".$idPersonne."','".$matricule."')");
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
<br/><br/><br/><br/>
<table border="1" align="center" width="500px" rules="all">
<br/><br/>
	<caption>Diplome </caption>
	<tr align="left">
		<th>IdDiplome</th><th>Matricule</th>
	</tr>
	
<?php
	$liste=mysql_query("select idDip,matricule from avoirdiplome");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idDip']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		
	</tr>
<?php
}
?>

</table>
<br/>
<table>
<tr> 
	<a href="saisADiplome.php">Nouveau</a>&nbsp;&nbsp;
	<a href="rechercheADiplome.php">Rechercher</a>&nbsp;&nbsp;
	<a href="afficheADiplome.php">Modifier</a>&nbsp;&nbsp;
</tr>
</table>
	