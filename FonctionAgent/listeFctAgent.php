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
		$idFonction=$_POST['idFonction'];
		$dateDebut=$_POST['dateDebut'];
		$dateFIN=$_POST['dateFIN'];
				if(empty($_POST['idPersonne']) || empty($_POST['matricule']) || empty($_POST['idFonction']) || empty($_POST['dateDebut']) || empty($_POST['dateFIN']))
				{
					header('location:VerifFctAgent.php?vide=veuillez remplir tous les champs&idPersonne='.$idPersonne.'&matricule='.$matricule.
					'&idFonction='.$idFonction.'&dateDebut='.$dateDebut.'&dateFIN='.$dateFIN);
					exit();
				}
	
				$result=mysql_query("insert into fonctionagent (idPersonne,matricule,idFonction,dateDebut,dateFIN) values
						('".$idPersonne."','".$matricule."','".$idFonction."','".$dateDebut."','".$dateFIN."')");
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
<table border="2px" align="center" width="800px" rules="all">
	<caption ></caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>IdFonction</th><th>DateDebut</th><th>DateFin</th>
	</tr>
	
<?php
	$liste=mysql_query("select matricule,idFonction,dateDebut,dateFIN from fonctionagent");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idFonction']; ?></td>
		<td><?php echo $info['dateDebut']; ?></td>
		<td><?php echo $info['dateFIN']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiFctAgent.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheFctAgent.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheFctAgent.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>