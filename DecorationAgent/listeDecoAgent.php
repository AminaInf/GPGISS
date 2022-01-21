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
/*	if(isset($_POST['Enregistrer']))
	{
		$idDeco=$_POST['idDeco'];
		$idPersonne=$_POST['idPersonne'];
		$matricule=$_POST['matricule'];
		$anneeDeco=$_POST['anneeDeco'];
		
			if(empty($_POST['idDeco']) || empty($_POST['idPersonne']) || empty($_POST['matricule']) || empty($_POST['anneeDeco']))
			{
				header('location:VerifDecoAg.php?vide=veuillez remplir tous les champs&idDeco='.$idDeco.'&idPersonne='.$idPersonne.'&matricule='.$matricule.'&anneeDeco='.$anneeDeco);
				exit();
			}
	
		
		$result=mysql_query("insert into decoagent (idDeco,idPersonne,matricule,anneeDeco) values
				('".$idDeco."','".$idPersonne."','".$matricule."','".$anneeDeco."')");
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
<br/><br/><br/><br/>
<table border="3px" align="center" width="800px" rules="all">
	<caption >Liste des carte contrats</caption>
	<tr align="left" border="2px">
		<th>IdDecoration</th><th>Matricule</th><th>AnneeDecoration</th>
	</tr>
	
<?php
	$liste=mysql_query("select idDeco,matricule,anneeDeco from decoagent");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idDeco']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['anneeDeco']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiDecoAg.php">Nouveau</a></td></tr>&nbsp;&nbsp;
		<a href="rechercheDecoAg.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheDeCOAg.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>