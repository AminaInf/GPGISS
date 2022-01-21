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
		$idCompagnie=$_POST['idCompagnie'];
		$refMutt=$_POST['refMutt'];
		$dateMut=$_POST['dateMut'];
				if(empty($_POST['idPersonne']) || empty($_POST['matricule']) || empty($_POST['idCompagnie']) || empty($_POST['refMutt']) 
							|| empty($_POST['dateMut']))
				{
					header('location:VerifMutation.php?vide=veuillez remplir tous les champs&idPersonne='.$idPersonne.'&matricule='.$matricule.'
					&idCompagnie='.$idCompagnie.'&refMutt='.$refMutt.'&dateMut='.$dateMut);
					exit();
				}
	
				$result=mysql_query("insert into mutation (idPersonne,matricule,idCompagnie,refMutt,dateMut) values
						('".$idPersonne."','".$matricule."','".$idCompagnie."','".$refMutt."','".$dateMut."')");
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
<table border="2px" align="center" width="800px" rules="all">
	<caption ></caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>IdCompagnie</th><th>ReferenceMutation</th><th>DateMutation</th><th>NombreMutation</th>
	</tr>
	
<?php
	$liste=mysql_query("select matricule,idCompagnie,refMutt,dateMut,nbreMutation from mutation");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idCompagnie']; ?></td>
		<td><?php echo $info['refMutt']; ?></td>
		<td><?php echo $info['dateMut']; ?></td>
		<td><?php echo $info['nbreMutation']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiMutation.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheMutation.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheMutation.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>