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
?>
<br/><br/><br/><br/>
<table border="3px" align="center" width="700px" rules="all">
	<caption ></caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>Grade</th><th>NumeroCNI</th><th>NumeroMutuel</th><th>GroupeSanguin</th><th>NumeroPermis</th><th>EtatMajor</th><th>Nom</th><th>Prenom</th>
		<th>DateNaissance</th><th>LieuNaissance</th><th>CCPA</th><th>DateIncorporation</th><th>LimiteAge</th><th>Prevention</th><th>Specialite</th><th>NumeroCIM</th>
		<th>Aptitude</th><th>Numero</th><th>Echelon</th><th>Echelle</th><th>DateNomination</th>
	</tr>
	
<?php
	$liste=mysql_query("select matricule,idGrade,numeroCNI,numeroMutuel,idG,numeroPermis,id,nom,prenom,dateNaiss,lieuNaiss,ccpa,datteIncorporation,limiteAge,prevention,
				specialite,numeroCim,aptitude,numero,echelon,echelle,dateNomination from agent");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idGrade']; ?></td>
		<td><?php echo $info['numeroCNI']; ?></td>
		<td><?php echo $info['numeroMutuel']; ?></td>
		<td><?php echo $info['idG']; ?></td>
		<td><?php echo $info['numeroPermis']; ?></td>
		<td><?php echo $info['id']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['dateNaiss']; ?></td>
		<td><?php echo $info['lieuNaiss']; ?></td>
		<td><?php echo $info['ccpa']; ?></td>
		<td><?php echo $info['datteIncorporation']; ?></td>
		<td><?php echo $info['limiteAge']; ?></td>
		<td><?php echo $info['prevention']; ?></td>
		<td><?php echo $info['specialite']; ?></td>
		<td><?php echo $info['numeroCim']; ?></td>
		<td><?php echo $info['aptitude']; ?></td>
		<td><?php echo $info['numero']; ?></td>
		<td><?php echo $info['echelon']; ?></td>
		<td><?php echo $info['echelle']; ?></td>
		<td><?php echo $info['dateNomination']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisi.php">Nouveau</a></td></tr>&nbsp;&nbsp;
		<a href="recherche.php">Rechercher</a>&nbsp;&nbsp;
		<a href="affiche.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>