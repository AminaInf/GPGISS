<html>
	<head> 	
	<title>Famille</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<br/><br/>
<h1 align="center" class="pt">Modifier les données de la famiille d'un agent</h1>
<?php
session_start();
/* 
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/

  	
include('connexion.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$result=mysql_query("select personne.idPersonne,idAgent,nom,prenom,dateNaiss,lieuNaiss,personne.profil,tel,adresse from personne where  personne.idPersonne='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/>
<form action="modifierPesonne.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
	<tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>"  size="35px" /></td></tr>
	<tr><td>Profil:</td><td>
		 <select name="idPersonne">
				<option value="personneaprevenir">Personne a prevenir</option>
				<option value="epoux">Epoux</option>
				<option value="epouse">Epouse</option>
				<option value="enfant">Enfant</option>
			</select>
		</td></tr>
	<tr><td>Nom:</td><td><input type="text" name="nom" value="<?php echo $liste['nom'];?>" size="20px" /></td></tr>
	<tr><td>Prenom:</td><td><input type="text" name="prenom" value="<?php echo $liste['prenom'];?>" size="20px" /></td></tr>
	<tr><td>DateNaissance:</td><td><input type="date" name="dateNaiss" value="<?php echo $liste['dateNaiss'];?>" size="35px" /></td></tr>
	<tr><td>LieuNaissance:</td><td><input type="text" name="lieuNaiss" value="<?php echo $liste['lieuNaiss'];?>" size="20px" /></td></tr>
	<tr><td>Telephone:</td><td><input type="text" name="tel" value="<?php echo $liste['tel'];?>" size="35px" /></td></tr>
	<tr><td>Adresse:</td><td><input type="text" name="adresse" value="<?php echo $liste['adresse'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idPersonne" value="<?php echo $id;?> "size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="submit" name="modifier" value="modifier"></td></tr>
</table>
</form>
<?php
	}
}
?>

<?php
 if(isset($_GET['mod']))
 	{
 		echo "<font color='red' size='4'><p align='center'>".$_GET['mod']."</p></font>";
 	}
?>
<?php

	if(isset($_POST['modifier']))
		{
			
			$idAgent=$_POST['idAgent'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$dateNaiss=$_POST['dateNaiss'];
			$lieuNaiss=$_POST['lieuNaiss'];
			$profil=$_POST['profil'];
			$tel=$_POST['tel'];
			$adresse=$_POST['adresse'];
			$id=$_POST['idPersonne'];
			$result=mysql_query("update personne set idAgent='".$idAgent."',nom='".$nom."',prenom='".$prenom."',dateNaiss=
										'".$dateNaiss."',lieuNaiss='".$lieuNaiss."',profil='".$profil."',tel='".$tel."',adresse='".$adresse."'
										where idPersonne='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listePesonne.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierPesonne.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>