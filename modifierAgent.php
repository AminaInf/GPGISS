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
		$result=mysql_query("select idGrade,numeroCNI,numeroMutuel,idG,idPermis,id,idCat,ccpa,datteIncorporation,limiteAge,prevention,
		specialite,numeroCim,aptitude,numero,dateNomination from agent where matricule='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierAgent.php" method="POST">
<table border="0" width="500px" cellpadding="10px" align="center">
<caption>Modification :</caption>
	 <tr><td>IdGrade:</td><td><input type="number" name="idGrade" value="<?php echo $liste['idGrade'];?>"  min='1' size="20px" /></td></tr>
	 <tr><td>NumeroCNI:</td><td><input type="text" name="numeroCNI" value="<?php echo $liste['numeroCNI'];?>"  size="20px" /></td></tr>
	 <tr><td>NumeroMutuel:</td><td><input type="number" name="numeroMutuel" value="<?php echo $liste['numeroMutuel'];?>"  size="20px" /></td></tr>
	 <tr><td>IdGSanguin:</td><td><input type="number" name="idG" value="<?php echo $liste['idG'];?>"  size="20px" /></td></tr>
	 <tr><td>IdPermis:</td><td><input type="number" name="idPermis" value="<?php echo $liste['idPermis'];?>" min='1' size="35px" /></td></tr>
	 <tr><td>IdMajor:</td><td><input type="number" name="id" value="<?php echo $liste['id'];?>"  min='1' size="20px" /></td></tr>
	 <tr><td>IdCategorie:</td><td><input type="number" name="idCat" value="<?php echo $liste['idCat'];?>"  size="35px" /></td></tr>
	 <tr><td>CCPA:</td><td><input type="number" name="ccpa" value="<?php echo $liste['ccpa'];?>"  size="20px" /></td></tr>
	 <tr><td>DateIncorporation:</td><td><input type="datetime" name="datteIncorporation" value="<?php echo $liste['datteIncorporation'];?>"  size="20px" /></td></tr>
	 <tr><td>LimiteAge:</td><td><input type="datetime" name="limiteAge" value="<?php echo $liste['limiteAge'];?>" size="20px" /></td></tr>
	 <tr><td>Prevention:</td>
		<td size="20px"><select name="prevention" value="<?php echo $liste['specialite'];?>" />
					<option value="PV1" >PV1</option>
					<option value="PV2">PV2</option>
					<option value="PV3">PV3</option>
				</select></td>
		 </tr>
	 <tr><td>Specialite:</td>
		<td><select name="specialite" value="<?php echo $liste['specialite'];?>" />
					<option value="S1">S1</option>
					<option value="S2">S2</option>
					<option value="S3">S3</option>
				</select></td>
		 </tr>
	 <tr><td>NumeroCIM:</td><td><input type="number" name="numeroCim" value="<?php echo $liste['numeroCim'];?>"  size="20px" /></td></tr>
	 <tr><td>Aptitude:</td>
		<td><select name="aptitude" value="<?php echo $liste['aptitude'];?>" />
					<option value="APTE">APTE</option>
					<option value="INAPTE">INAPTE</option>
				</select></td>
		</tr>
	 <tr><td>Numero:</td><td><input type="number" name="numero" value="<?php echo $liste['numero'];?>"  size="20px" /></td></tr>
	 <tr><td>DateNomination:</td><td><input type="datetime" name="dateNomination" value="<?php echo $liste['dateNomination'];?>"  size="20px" /></td></tr>
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
			$idPermis=$_POST['idPermis'];
			$id=$_POST['id'];
			$idCat=$_POST['idCat'];
			$ccpa=$_POST['ccpa'];
			$datteIncorporation=$_POST['datteIncorporation'];
			$limiteAge=$_POST['limiteAge'];
			$prevention=$_POST['prevention'];
			$specialite=$_POST['specialite'];
			$numeroCim=$_POST['numeroCim'];
			$aptitude=$_POST['aptitude'];
			$numero=$_POST['numero'];
			$dateNomination=$_POST['dateNomination'];
			$id=$_POST['matricule'];
			$result=mysql_query("update agent set idGrade='".$idGrade."',numeroCNI='".$numeroCNI."',numeroMutuel='".$numeroMutuel."',
							idG='".$idG."',idPermis='".$idPermis."',id='".$id."',idCat='".$idCat."',ccpa='".$ccpa."',datteIncorporation='".$datteIncorporation."',
							limiteAge='".$limiteAge."',prevention='".$prevention."',specialite='".$specialite."',numeroCim='".$numeroCim."',aptitude='".$aptitude."',
							numero='".$numero."',dateNomination='".$dateNomination."' where matricule='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeAgent.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierAgent.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>