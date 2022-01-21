<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>
<body>
<?php
session_start();
	if(isset($_POST['SUIVANT']))
	{
		header("location:saisiCentre.php");
	}
?>

<br/><br/><br/><br/>
<form action="" method="POST">
<table>
		<table border="0" width="500px" cellpadding="10px" align="left">
			<tr><td>Matricule:</td><td><input type="text" name="matricule" size="20px" /></td></tr>
			<tr><td>Grade:</td><td>
				<select name="idGrade">
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
			<tr><td>NumeroCNI:</td><td><input type="text" name="numeroCNI" size="20px" /></td></tr>
			<tr><td>NumeroMutuel:</td><td><input type="number" name="numeroMutuel" min='1000' size="20px" /></td></tr>
			<tr><td>GroupeSanguin:</td><td>
				<select name="idG">
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
			<tr><td>NumeroPermis:</td><td><input type="number" name="numeroPermis" size="20px" /></td></tr>
			<tr><td>EtatMajor:</td><td><input type="number" name="id" size="20px" /></td></tr>
			
			<tr><td>Prenom:</td><td><input type="text" name="prenom" size="20px" /></td></tr>
			<tr><td>Nom:</td><td><input type="text" name="nom" size="20px" /></td></tr>
			<tr><td>DateNaiss:</td><td><input type="date" name="dateNaiss" size="20px" /></td></tr>
			<tr><td>LieuNaiss:</td><td><input type="text" name="lieuNaiss" size="20px" /></td></tr>
			</table>
		
		
			<tr><td>CCPA:</td><td><input type="text" name="ccpa" size="20px" /></td></tr>
			<tr><td>DateIncorporation:</td><td><input type="date" name="datteIncorporation" size="20px" /></td></tr>
			<tr><td>LimiteAge:</td><td><input type="date" name="limiteAge" size="20px" /></td></tr>
			 <tr><td>Prevention:</td><td>
				<select name="prevention">
						<option value="PV1">PV1</option>
						<option value="PV2">PV2</option>
						<option value="PV3">PV3</option>
				</select>
			</td></tr>
			<tr><td>Specilaite:</td><td>
				<select name="specialite">
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
			<tr><td>NumeroCIM:</td><td><input type="number" name="numeroCim" size="20px" /></td></tr>
			<tr><td>Aptitude:</td><td>
				<select name="aptitude">
						<option value="apte">apte</option>
						<option value="en emploi sedentaire">en emploi sedentaire</option>
				</select>
			</td></tr>
			<tr><td>Numero:</td><td><input type="number" name="numero" min='1' max='10000' size="20px" /></td></tr>
			<tr><td>Echelon:</td><td><input type="number" name="echelon" min='1' max='12' size="20px" /></td></tr>
			<tr><td>Echelle:</td><td><input type="number" name="echelle" min='1' max='4' size="20px" /></td></tr>
			<tr><td>DateNomination:</td><td><input type="date" name="dateNomination" size="20px" /></td></tr>
			<tr><td>Regime:</td><td>
				Marie<input type="checkbox" name="regime[]" value="marie" size="20px" /><br>
				Celibataire<input type="checkbox" name="regime[]" value="celibataire" size="20px" /><br>
				Veuve<input type="checkbox" name="regime[]" value="veuve" size="20px" />	
			</td></tr>
		</table>
		<td><input type="submit" name="SUIVANT" value="SUIVANT"/></td></tr>
</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['SUIVANT']))
	
	{
		$matricule=$_POST['matricule'];
		$idGrade=$_POST['idGrade'];
		$numeroCNI=$_POST['numeroCNI'];
		$numeroMutuel=$_POST['numeroMutuel'];
		$idG=$_POST['idG'];
		$numeroPermis=$_POST['numeroPermis'];
		$id=$_POST['id'];
		$prenom=$_POST['prenom'];
		$nom=$_POST['nom'];
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
		$regime=implode($_POST['regime']);
				
			$result=mysql_query("insert into agent(matricule,idGrade,numeroCNI,numeroMutuel,idG,numeroPermis,id,prenom,nom,dateNaiss,lieuNaiss,ccpa,datteIncorporation,
				limiteAge,prevention,specialite,numeroCim,aptitude,numero,echelon,echelle,dateNomination,regime)values
				('".$matricule."','".$idGrade."','".$numeroCNI."','".$numeroMutuel."','".$idG."','".$numeroPermis."','".$id."','".$prenom."','".$nom."',
				'".$dateNaiss."','".$lieuNaiss."','".$ccpa."','".$datteIncorporation."','".$limiteAge."','".$prevention."','".$specialite."','".$numeroCim."','".$aptitude."',
				'".$numero."','".$echelon."','".$echelle."','".$dateNomination."','".$regime."')");
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
<br/>
<table>
	<tr>
		<a href="listeAgent.php">Agent</a>&nbsp;&nbsp;
		<a href="jointure.php">ListeAgent</a>&nbsp;&nbsp;
		<a href="saisi.php">Nouveau</a>&nbsp;&nbsp;
	</tr>
</table>
<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
</body>
</html>
