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
		$matricule=$_POST['matricule'];
		$idCentre=$_POST['idCentre'];
				$result=mysql_query("insert into etreliee (idPersonne,matricule,idCentre) values ('".$matricule."','".$idCentre."')");
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
<table border="2px" align="center" width="600px" rules="all">
	<caption ></caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>IdCentre</th>
	</tr>
	
<?php
	$liste=mysql_query("select matricule,idCentre from etreliee");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idCentre']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiLiaison.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheLiaison.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheLiaison.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>