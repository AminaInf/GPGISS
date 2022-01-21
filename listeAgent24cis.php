<?php
/* 
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/

?>
<br/><br/>
<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="cssCom.css">

	</head>
<body>
<h1 class="pt" align="center">Liste des agents du 24 CIS </h1>

<?php
/* message de succes pour modification */
 if(isset($_GET['mod']))
 	{
 		echo "<font color='green' size='4'><p align='center'>".$_GET['mod']."</p></font>";
 	}
	
?>
<br/>
<table border="3px" align="center" width="800px" rules="all">
	<tr align="left" border="2px" bgcolor="blue">
		<th>Agent</th><th>Matricule</th><th>Grade</th><th>NumeroCNI</th><th>NumeroMutuel</th><th>NumeroPermis</th><th>Nom</th>
		<th>Prenom</th><th>DateNaiss</th><th>LieuNaiss</th><th>NomCentre</th><th>GroupeSanguin</th>
	</tr>
<?php
include('connexion.php');
?>
<?php
	$liste=mysql_query("select idAgent,matricule,idGrade,numeroCNI,numeroMutuel,numeroPermis,nom,prenom,dateNaiss,lieuNaiss,nomUnite,grpeSanguin from gpgiss.agentcomp where nomUnite='24 CIS' ");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idGrade']; ?></td>
		<td><?php echo $info['numeroCNI']; ?></td>
		<td><?php echo $info['numeroMutuel']; ?></td>
		<td><?php echo $info['numeroPermis']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['dateNaiss']; ?></td>
		<td><?php echo $info['lieuNaiss']; ?></td>
		<td><?php echo $info['nomUnite']; ?></td>
		<td><?php echo $info['grpeSanguin']; ?></td>
	</tr>
<?php
}
?>
<tr align="left" border="2px" bgcolor="blue">
		<td>Agent</td><td>CCPA</td><td>DateIncorporation</td><td>LimiteAge</td><td>Prevention</td><td>Specialite</td>
		<td>NumeroCIM</td><td>Aptitude</td><td>Numero</td><td>Echelon</td><td>Echelle</td>
	</tr>
	<?php
		$liste=mysql_query("select idAgent,ccpa,datteIncorporation,limiteAge,prevention,specialite,numeroCim,aptitude,numero,echelon,echelle from gpgiss.agentcomp where nomUnite='24 CIS' ");
	while($info=mysql_fetch_array($liste))
	{
	?>
	<tr>
		<td><?php echo $info["idAgent"]?></td>
		<td><?php echo $info["ccpa"]?></td>
		<td><?php echo $info["datteIncorporation"]?></td>
		<td><?php echo $info["limiteAge"]?></td>
		<td><?php echo $info["prevention"]?></td>
		<td><?php echo $info["specialite"]?></td>
		<td><?php echo $info["numeroCim"]?></td>
		<td><?php echo $info["aptitude"]?></td>
		<td><?php echo $info["numero"]?></td>
		<td><?php echo $info["echelon"]?></td>
		<td><?php echo $info["echelle"]?></td>
	</tr>
<?php
}
?>
</table>
<br/><br/><br/>
<table>
	<tr>
		<a href="rechercheA24cis.php" id="a1">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheA24cis.php" id="a2">Modifier</a>&nbsp;&nbsp;
		<a href="delete24cis.php" id="a3">Supprimer</a>&nbsp;&nbsp;
		
	</tr>
</table>
<br/><br/><br/>
</body>
</html>