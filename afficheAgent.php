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
?>

<?php
/* message de succes pour modification */
 if(isset($_GET['mod']))
 	{
 		echo "<font color='green' size='4'><p align='center'>".$_GET['mod']."</p></font>";
 	}
?>
<br/>
<table border="1" align="center" width="900px" rules="all">
	<caption class="pt">Liste des agents</caption>
	<tr align="left">
		<th>Matricule</th><th>IdGrade</th><th>NumeroCNI</th><th>NumeroMutuel</th><th>IdGSanguin</th><th>IdPermis</th><th>IdMajor</th>
		<th>IdCategorie</th><th>CCPA</th><th>DateIncorporation</th><th>LimiteAge</th><th>Prevention</th><th>Specialite</th>
		<th>NumeroCIM</th><th>Aptitude</th><th>Numero</th><th>DateNomination</th>
	</tr>
	
<?php
	$liste=mysql_query("select idPersonne,matricule,idGrade,numeroCNI,numeroMutuel,idG,idPermis,id,idCat,ccpa,datteIncorporation,
							limiteAge,prevention,specialite,numeroCim,aptitude,numero,dateNomination from agent");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idPersonne']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idGrade']; ?></td>
		<td><?php echo $info['numeroCNI']; ?></td>
		<td><?php echo $info['numeroMutuel']; ?></td>
		<td><?php echo $info['idG']; ?></td>
		<td><?php echo $info['idPermis']; ?></td>
		<td><?php echo $info['id']; ?></td>
		<td><?php echo $info['idCat']; ?></td>
		<td><?php echo $info['ccpa']; ?></td>
		<td><?php echo $info['datteIncorporation']; ?></td>
		<td><?php echo $info['limiteAge']; ?></td>
		<td><?php echo $info['prevention']; ?></td>
		<td><?php echo $info['specialite']; ?></td>
		<td><?php echo $info['numeroCim']; ?></td>
		<td><?php echo $info['aptitude']; ?></td>
		<td><?php echo $info['numero']; ?></td>
		<td><?php echo $info['dateNomination']; ?></td>
		<td>
			<a href="modifierAgent.php?id=<?php echo $info['matricule']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table> 