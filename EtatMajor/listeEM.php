<html>
<head>
<link rel="stylesheet" type="text/css" href="styleDipSecou.css">
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
		$id=$_POST['id'];
			if(empty($_POST['id'])){
				header('location:VerifInsertion.php?vide=veuillez remplir tous les champs&prenom='.$prenom.'&nom='.$nom);
				exit();
			}

		$result=mysql_query("insert into etatmajor (id) values
				('".$id."')");
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
<table border="2px" align="center" width="200px" rules="all">
	<caption >Liste des etats major</caption>
	<tr align="left" border="2px">
		<th>IdEtatMajor</th>
	</tr>
	
<?php
	$liste=mysql_query("select id from etatmajor");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['id']; ?></td>
	</tr>
	<?php
}
?>

<br/>
<table>
	<tr>
		<a href="saisiEM.php">Nouveau</a></td></tr>&nbsp;&nbsp;
		<a href="rechercheEM.php">Rechercher</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>