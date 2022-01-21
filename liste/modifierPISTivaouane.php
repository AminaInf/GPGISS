<br/><br/>
<html>
<body>
<br/><br/>
<h1 class="pt" align="center">Modifier un agent du centre de Tivaouane</h1>
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
$result=mysql_query("select idAgent,nom,prenom,dateNaiss,lieuNaiss,matricule,nomCentre,numeroCNI,specialite from gpgiss.agent where idAgent='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierPISTivaouane.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>Modifier  :</caption>
 <br/><br/><br/>
	 <tr><td>Nom:</td><td><input type="text" name="nom" value="<?php echo $liste['nom'];?>" size="20px" /></td></tr>
	 <tr><td>Prenom:</td><td><input type="text" name="prenom" value="<?php echo $liste['prenom'];?>" size="20px" /></td></tr>
	 <tr><td>DateNaiss:</td><td><input type="date" name="dateNaiss" value="<?php echo $liste['dateNaiss'];?>" size="20px" /></td></tr>
	 <tr><td>LieuNaiss:</td><td><input type="text" name="lieuNaiss" value="<?php echo $liste['lieuNaiss'];?>" size="20px" /></td></tr>
	 <tr><td>Matricule:</td><td><input type="text" name="matricule" value="<?php echo $liste['matricule'];?>" size="20px" /></td></tr>
	 <tr><td>NomUnite:</td><td>
	 <select name="nomCentre" value="<?php echo $liste['nomCentre'];?>"/>
						<option value="CSIS Tivaouane">CSIS Tivaouane</option>
	                    <option value="CSIS Saly">CSIS Saly</option>
	                    <option value="CSIS Mekhe">CSIS Mekhe</option>
			            <option value="CSIS Khombole">CSIS Khombole</option>
						<option value="CSIS Bambey">CSIS Bambey</option>
						
						
						
						
				</select>
	</td></tr>
	 <tr><td>NumeroCNI:</td><td><input type="text" name="numeroCNI" value="<?php echo $liste['numeroCNI'];?>" size="20px" /></td></tr>
	 <tr><td>Specialite:</td><td>
	 <select name="specialite" value="<?php echo $liste['specialite'];?>"/>
						<option value="Service General">Service General</option>
						<option value="Intendance">Intendance</option>
						<option value="Transmissions">Transmissions</option>
						<option value="Genie">Genie</option>
						<option value="Materiels">Materiels</option>
						<option value="Marine">Marine</option>
						<option value="Musique">Musique</option>
						<option value="Sante">Sante</option>
						<option value="GREP">GREP</option>
						<option value="EPS">EPS</option>
				</select>
	</td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idAgent" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$dateNaiss=$_POST['dateNaiss'];
			$lieuNaiss=$_POST['lieuNaiss'];
			$matricule=$_POST['matricule'];
			$nomCentre=$_POST['nomCentre'];
			$numeroCNI=$_POST['numeroCNI'];
			$specialite=$_POST['specialite'];
			$id=$_POST['idAgent'];
			$result=mysql_query("update agent set nom='".$nom."',prenom='".$prenom."',dateNaiss='".$dateNaiss."',lieuNaiss='".$lieuNaiss."'
								,matricule='".$matricule."',nomCentre='".$nomCentre."',numeroCNI='".$numeroCNI."',specialite='".$specialite."' where idAgent='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listePISTivaouane.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierPISTivaouane.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>