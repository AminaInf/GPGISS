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
include('connexion.php');
	/*if(isset($_POST['Enregistrer']))
	
	{
		$idPersonne=$_POST['idPersonne'];
		$matricule=$_POST['matricule'];
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
		
			$result=mysql_query("insert into agent (idPersonne,matricule,idGrade,numeroCNI,numeroMutuel,idG,idPermis,id,idCat,ccpa,datteIncorporation,
			limiteAge,prevention,specialite,numeroCim,aptitude,numero,dateNomination) values('".$idPersonne."','".$matricule."','".$idGrade."'
			,'".$numeroCNI."','".$numeroMutuel."','".$idG."','".$idPermis."','".$id."','".$idCat."','".$ccpa."','".$datteIncorporation."'
			,'".$limiteAge."','".$prevention."','".$specialite."','".$numeroCim."','".$aptitude."','".$numero."','".$dateNomination."')");
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
<br/><br/><br/>
<table border="1" align="center" width="1000px" rules="all">
	<caption ></caption>
	<tr align="left">
		<th>Matricule</th><th>Prenom</th><th>Nom</th><th>DateNaissance</th><th>LieuNaissance</th><th>NomCentre</th><th>NomCompagnie</th><th>DateIncorporation</th><th>LimiteAge</th>
		<th>IdGrade</th><th>NumeroCNI</th><th>NumeroMutuel</th><th>IdGSanguin</th><th>IdPermis</th><th>IdMajor</th><th>IdCategorie</th><th>CCPA</th><th>Prevention</th><th>Specialite</th>
		<th>numeroCIM</th><th>Aptitude</th><th>Numero</th><th>DateNomination</th>
	</tr>
	
<?php
	$liste=mysql_query("select matricule,prenom,nom,dateNaiss,LieuNaiss,nomCentre,nomComp,datteIncorporation,limiteAge,idGrade,numeroCNI,numeroMutuel,idG,idPermis,id,idCat,ccpa,prevention,
					specialite,numeroCim,aptitude,numero,dateNomination from agent");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['dateNaiss']; ?></td>
		<td><?php echo $info['LieuNaiss']; ?></td>
		<td><?php echo $info['nomCentre']; ?></td>
		<td><?php echo $info['nomComp']; ?></td>
		<td><?php echo $info['datteIncorporation']; ?></td>
		<td><?php echo $info['limiteAge']; ?></td>
		<td><?php echo $info['idGrade']; ?></td>
		<td><?php echo $info['numeroCNI']; ?></td>
		<td><?php echo $info['numeroMutuel']; ?></td>
		<td><?php echo $info['idG']; ?></td>
		<td><?php echo $info['idPermis']; ?></td>
		<td><?php echo $info['id']; ?></td>
		<td><?php echo $info['idCat']; ?></td>
		<td><?php echo $info['ccpa']; ?></td>
		<td><?php echo $info['prevention']; ?></td>
		<td><?php echo $info['specialite']; ?></td>
		<td><?php echo $info['numeroCim']; ?></td>
		<td><?php echo $info['aptitude']; ?></td>
		<td><?php echo $info['numero']; ?></td>
		<td><?php echo $info['dateNomination']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiAgent.php">Nouveau</a></td></tr>&nbsp;&nbsp;
		<a href="rechercheAgent.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheAgent.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>