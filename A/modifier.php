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
$result=mysql_query("select idGrade,numeroCNI,numeroMutuel,idG,numeroPermis,id,nom,prenom,dateNaiss,lieuNaiss,ccpa,datteIncorporation,limiteAge,prevention,
				specialite,numeroCim,aptitude,numero,echelon,echelle,dateNomination from agent where matricule='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifier.php" method="POST">
<table border="0" width="500px" cellpadding="10px" align="center">
<caption>Modification :</caption>

		 <tr><td>Grade:</td><td>
			<select name="idGrade" value="<?php echo $liste['idGrade'];?>" />
					<option value=""></option>
					<option value="General de Brigarde">General de Brigarde</option>
					<option value="Colonel">Colonel</option>
					<option value="Lt-Colonel">Lt-Colonel</option>
					<option value="Commandant">Commandant</option>
					<option value="Capitaine">Capitaine</option>
					<option value="Lieutenant">Lieutenant</option> 
					<option value="Sous-Lieutenant">Sous-Lieutenant</option>
					<option value="Adjudant-Major">Adjudant-Major</option>
					<option value="Adjudant-Chef">Adjudant-Chef</option>
					<option value="Adjudant">Adjudant</option>
					<option value="Sergent-Chef">Sergent-Chef</option>
					<option value="Sergent">Sergent</option> 
					<option value="Caporal-Chef">Caporal-Chef</option>
					<option value="Caporal">Caporal</option>
					<option value="F/C">F/C</option> 
					<option value="1Classe">1Classe</option>
					<option value="2Classe">2Classe</option> 
			</select>
		</td></tr>
		<tr><td>NumeroCNI:</td><td><input type="text" name="numeroCNI" value="<?php echo $liste['numeroCNI'];?>" size="20px" /></td></tr>
		<tr><td>NumeroMutuel:</td><td><input type="number" name="numeroMutuel" value="<?php echo $liste['numeroMutuel'];?>" size="20px" /></td></tr>
		<tr><td>GroupeSanguin:</td><td>
				<select name="idG" value="<?php echo $liste['idG'];?>" />
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="A+">A+</option> 
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
				</select>
		</td></tr>
		<tr><td>NumeroPermis:</td><td><input type="number" name="numeroPermis" value="<?php echo $liste['numeroPermis'];?>" size="20px" /></td></tr>
		<tr><td>EtatMajor:</td><td><input type="number" name="id" value="<?php echo $liste['id'];?>" size="20px" /></td></tr>
		<tr><td>Nom:</td><td><input type="text" name="nom" value="<?php echo $liste['nom'];?>" size="20px" /></td></tr>
		<tr><td>Prenom:</td><td><input type="text" name="prenom" value="<?php echo $liste['prenom'];?>" size="20px" /></td></tr>
		<tr><td>DateNaiss:</td><td><input type="date" name="dateNaiss" value="<?php echo $liste['dateNaiss'];?>" size="20px" /></td></tr>
		<tr><td>LieuNaiss:</td><td><input type="text" name="lieuNaiss" value="<?php echo $liste['lieuNaiss'];?>" size="20px" /></td></tr>
		<tr><td>CCPA:</td><td><input type="text" name="ccpa" value="<?php echo $liste['ccpa'];?>" size="20px" /></td></tr>
		<tr><td>DateIncorporation:</td><td><input type="date" name="datteIncorporation" value="<?php echo $liste['datteIncorporation'];?>" size="20px" /></td></tr>
		<tr><td>LimiteAge:</td><td><input type="date" name="limiteAge" value="<?php echo $liste['limiteAge'];?>" size="20px" /></td></tr>
		<tr><td>Prevention:</td><td>
			<select name="prevention" value="<?php echo $liste['prevention'];?>" />
						<option value="PV1">PV1</option>
						<option value="PV2">PV2</option>
						<option value="PV3">PV3</option>
				</select>
		</td></tr>
		<tr><td>Specialite:</td><td><input type="text" name="specialite" value="<?php echo $liste['specialite'];?>" size="20px" /></td></tr>
		<tr><td>NumeroCIM:</td><td><input type="number" name="numeroCim" value="<?php echo $liste['numeroCim'];?>" size="20px" /></td></tr>
		<tr><td>Aptitude:</td><td>
			<select name="aptitude">
						<option value="apte">apte</option>
						<option value="en emploi sedentaire">en emploi sedentaire</option>
				</select>
		</td></tr>
		<tr><td>Numero:</td><td><input type="number" name="numero" value="<?php echo $liste['numero'];?>" size="20px" /></td></tr>
		<tr><td>Echelon:</td><td><input type="number" name="echelon" value="<?php echo $liste['echelon'];?>" size="20px" /></td></tr>
		<tr><td>Echelle:</td><td><input type="number" name="echelle" value="<?php echo $liste['echelle'];?>" size="20px" /></td></tr>
		<tr><td>DateNomination:</td><td><input type="date" name="dateNomination" value="<?php echo $liste['dateNomination'];?>" size="20px" /></td></tr>
		
	 <tr><td colspan="2"><input type="hidden" name="matricule" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$idGrade=$_POST['idGrade'];
			$numeroCNI=$_POST['numeroCNI'];
			$numeroMutuel=$_POST['numeroMutuel'];
			$idG=$_POST['idG'];
			$numeroPermis=$_POST['numeroPermis'];
			$Eta_id=$_POST['Eta_id'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$dateNaiss=$_POST['dateNaiss'];
			$lieuNaiss=$_POST['lieuNaiss'];
			$ccpa=$_POST['ccpa'];
			$datteIncorporation=$_POST['datteIncorporation'];
			$limiteAge=$_POST['limiteAge'];
			$prevention=$_POST['prevention'];
			$specialite=$_POST['specialite'];
			$numeroCim=$_POST['numeroCim'];
			$aptitude=$_POST['aptitude'];
			$numero=$_POST['numero'];
			$echelon=$_POST['echelon'];
			$echelle=$_POST['echelle'];
			$dateNomination=$_POST['dateNomination'];
			$id=$_POST['matricule'];
			$result=mysql_query("update agent set idGrade='".$idGrade."',numeroCNI='".$numeroCNI."',numeroMutuel='".$numeroMutuel."',idG='".$idG."',numeroPermis='".$numeroPermis."',
				Eta_id='".$Eta_id."',nom='".$nom."',prenom='".$prenom."',dateNaiss='".$dateNaiss."',lieuNaiss='".$lieuNaiss."',ccpa='".$ccpa."',datteIncorporation=
				'".$datteIncorporation."',limiteAge='".$limiteAge."',prevention='".$prevention."',specialite='".$specialite."',numeroCim='".$numeroCim."',aptitude='".$aptitude."'
				,numero='".$numero."',echelon='".$echelon."',echelle='".$echelle."',dateNomination='".$dateNomination."' where matricule='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeAgent.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifier.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>