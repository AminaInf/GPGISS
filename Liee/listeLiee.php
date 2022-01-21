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
		$idInt=$_POST['idInt'];
			$result=mysql_query("insert into lier (matricule,idInt) values('".$matricule."','".$idInt."')");
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
<table border="2px" align="center" width="400px" rules="all">
	<caption ></caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>IdInt</th>
	</tr>
	
<?php
	$liste=mysql_query("select idAgent,idInt from liee");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['idInt']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiLier.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheLier.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheLiee.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</table>
</body>
</html>