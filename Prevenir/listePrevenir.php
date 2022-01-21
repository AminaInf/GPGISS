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
		$Age_idPersonne=$_POST['Age_idPersonne'];
		$matricule=$_POST['matricule'];
		$idPersonne=$_POST['idPersonne'];
		$tel=$_POST['tel'];
		
				if(empty($_POST['Age_idPersonne']) || empty($_POST['matricule']) || empty($_POST['idPersonne']) || empty($_POST['tel']))
				{
					header('location:VerifPrevenir.php?vide=veuillez remplir tous les champs&Age_idPersonne='.$Age_idPersonne.'&matricule='.$matricule.
					'&idPersonne='.$idPersonne.'&tel='.$tel);
					exit();
				}
	
			$result=mysql_query("insert into prevenir (Age_idPersonne,matricule,idPersonne,tel)
		values('".$Age_idPersonne."','".$matricule."','".$idPersonne."','".$tel."')");
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
<table border="2px" align="center" width="700px" rules="all">
	<caption ></caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>IdPersonne</th><th>Telephone</th>
	</tr>
	
<?php
	$liste=mysql_query("select matricule,idPersonne,tel from prevenir");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idPersonne']; ?></td>
		<td><?php echo $info['tel']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiPrevenir.php">Nouveau</a>&nbsp;&nbsp;
		<a href="recherchePrevenir.php">Rechercher</a>&nbsp;&nbsp;
		<a href="affichePrevenir.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>