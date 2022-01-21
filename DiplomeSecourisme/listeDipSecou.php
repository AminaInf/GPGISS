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
		$idSecou=$_POST['idSecou'];
		$typeSecou=$_POST['typeSecou'];
		if(empty($_POST['idSecou']) || empty($_POST['typeSecou']))
				{
					header('location:VerifDipSecou.php?vide=veuillez remplir tous les champs&idSecou='.$idSecou.'&typeSecou='.$typeSecou);
					exit();
				}
		$result=mysql_query("insert into diplomesecourisme (idSecou,typeSecou) values ('".$idSecou."','".$typeSecou."')");
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
	<caption >LISTE DIPLOME SECOURISME</caption>
	<tr align="left" border="2px">
		<th>IdSecourisme</th><th>TypeSecourisme</th>
	</tr>
	
<?php
	$liste=mysql_query("select idSecou,typeSecou from diplomesecourisme");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idSecou']; ?></td>
		<td><?php echo $info['typeSecou']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<table>
	<tr>
		<a href="saisiDipSecou.php">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheDipSecou.php">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheDipSecou.php">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>