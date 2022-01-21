<html>
<head>
<link rel="stylesheet" href="cssAgent.css">

</head>
<body>
<?php
session_start();
?>
<br/><br/><br/><br/>
<form action="" method="POST">

	<table border="0" width="1000px" cellpadding="10px" align="left">
		<table border="0" width="500px" cellpadding="10px" align="left">
		 <tr><td>Matricule:</td><td><input type="number" name="matricule" min='1' size="20px" /></td></tr>
		 <tr><td>Prenom:</td><td><input type="text" name="prenom" size="20px" /></td></tr>
		 <tr><td>Nom:</td><td><input type="text" name="nom" size="20px" /></td></tr>
		 <tr><td>DateNaiss:</td><td><input type="date" name="dateNaiss" size="20px" /></td></tr>
		 <tr><td>LieuNaiss:</td><td><input type="text" name="LieuNaiss" size="20px" /></td></tr>
		 <tr><td>DateIncorporation:</td><td><input type="datetime" name="datteIncorporation" size="20px" /></td></tr>
		 <tr><td>LimiteAge:</td><td><input type="datetime" name="limiteAge" size="20px" /></td></tr>
		 <tr><td>IdGrade:</td><td><input type="number" name="idGrade" min='1' size="20px" /></td></tr>
		 <tr><td>NumeroCNI:</td><td><input type="number" name="numeroCNI" min='1' size="20px" /></td></tr>
		 <br/>
		 <tr><td>NumeroMutuel:</td><td><input type="number" name="numeroMutuel" min='1' size="20px" /></td></tr>
		 <tr><td>IdG:</td><td><input type="number" name="idG" min='1' size="20px" /></td></tr>
		 </table>
		<table border="0" width="500px" cellpadding="10px" align="right">
		 <tr><td >IdPermis:</td><td ><input type="number" name="idPermis" min='1' size="20px" /></td></tr>
		 <tr><td>IdMajor:</td><td><input type="number" name="id" min='1' size="20px" /></td></tr>
		 <tr><td>IdCategorie:</td><td><input type="number" name="idCat" min='1' size="20px" /></td></tr>
		 <tr><td>CCPA:</td><td><input type="text" name="ccpa" size="20px" /></td></tr>
		 <tr><td>Prevention:</td>
				<td><select name="prevention">
					<option value="PV1">PV1</option>
					<option value="PV2">PV2</option>
					<option value="PV3">PV3</option>
				</select></td>
		 </tr>
		 <tr><td>Specialite:</td>
			<td><select name="specialite">
					<option value="Service General">Service General</option>
					<option value="Intendance">Intendance</option>
					<option value="Transmissions">Transmissions</option>
					<option value="Genie">Genie</option>
					<option value="Materiel">Materiel</option>
					<option value="Marine">Marine</option>
					<option value="Musique">Musique</option>
					<option value="Sante">Sante</option>
					<option value="GREP">GREP</option>
					<option value="EPS">EPS</option>
				</select></td>
		 </tr>
				
		 <tr><td>NumeroCIM:</td><td><input type="number" name="numeroCim" min='1000' size="20px" /></td></tr>
		 <tr><td>Aptitude:</td>
			<td><select name="aptitude" >
					<option value="APTE">APTE</option>
					<option value="En emploi sedantaire">En emploi sedantaire</option>
				</select></td>
		</tr>
		 <tr><td>Numero:</td><td><input type="number" name="numero" min='1' size="20px" /></td></tr>
		 <tr><td>DateNomination:</td><td><input type="date" name="dateNomination" size="20px" /></td></tr>
		
		 <tr><td colspan="2"><input type="submit" name="Suivant" value="Suivant"></td></tr> 
		 </table>
	</table>
	
</form>

<?php
include('connexion.php');
	if(isset($_POST['Suivant']))
	
	{
		//$idPersonne=$_POST['idPersonne'];
		$matricule=$_POST['matricule'];
		$idGrade=$_POST['idGrade'];
		$numeroCNI=$_POST['numeroCNI'];
		$numeroMutuel=$_POST['numeroMutuel'];
		$idG=$_POST['idG'];
		$idPermis=$_POST['idPermis'];
		$id=$_POST['id'];
		$idCat=$_POST['idCat'];
		$ccpa=$_POST['ccpa'];
		$prevention=$_POST['prevention'];
		$specialite=$_POST['specialite'];
		$numeroCim=$_POST['numeroCim'];
		$aptitude=$_POST['aptitude'];
		$numero=$_POST['numero'];
		$dateNomination=$_POST['dateNomination'];
		
			$result=mysql_query("insert into agent (matricule,prenom,nom,dateNaiss,LieuNaiss,nomCentre,nomComp,datteIncorporation,limiteAge,idGrade,numeroCNI,numeroMutuel,idG,idPermis,id,
			idCat,ccpa,prevention,specialite,numeroCim,aptitude,numero,dateNomination) values('".$matricule."','".$prenom."','".$nom."','".$dateNaiss."','".$LieuNaiss."',
			'".$idGrade."','".$datteIncorporation."','".$limiteAge."','".$numeroCNI."','".$numeroMutuel."','".$idG."','".$idPermis."','".$id."','".$idCat."','".$ccpa."',
			'".$prevention."','".$specialite."','".$numeroCim."','".$aptitude."','".$numero."','".$dateNomination."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}

?>
</body>
</html>