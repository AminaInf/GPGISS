<html>
<head> 	
	<title>Permis</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<?php
include('connexion.php');
	/*if(isset($_POST['Enregistrer']))
	
	{
		$idPermis=$_POST['idPermis'];
		$type=$_POST['type'];
		$duree=$_POST['duree'];
		$etat=$_POST['etat'];
				if(empty($_POST['idPermis']) || empty($_POST['type']) || empty($_POST['type']) || empty($_POST['duree']) || empty($_POST['etat']))
				{
					header('location:VerifPermis.php?vide=veuillez remplir tous les champs&idPermis='.$idPermis.'&type='.$type.'&duree='.$duree.'&etat='.$etat);
					exit();
				}
	
				$result=mysql_query("insert into permis (idPermis,type,duree,etat) values('".$idPermis."','".$type."','".$duree."','".$etat."')");
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
		<th>numeroPermis</th><th>Type</th><th>Duree</th><th>Etat</th>
	</tr>
	
<?php
	$liste=mysql_query("select numeroPermis,type,duree,etat from permis");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['numeroPermis']; ?></td>
		<td><?php echo $info['type']; ?></td>
		<td><?php echo $info['duree']; ?></td>
		<td><?php echo $info['etat']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>

</body>
</html>