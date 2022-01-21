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
	if(isset($_POST['Enregistrer']))
	{
		$idPersonne=$_POST['idPersonne'];
		$matricule=$_POST['matricule'];
		$idInt=$_POST['idInt'];
		//verification de l saisie
		if(empty($_POST['idPersonne']) || empty($_POST['matricule']) || empty($_POST['idInt']))
				{
					header('location:verifAgentGrade.php?vide=veuillez remplir tous les champs&idPersonne='.$idPersonne.'&matricule='.$matricule.'&idInt='.$idInt);
					exit();
				}
		$result=mysql_query("insert into agentgrade (idPersonne,matricule,idInt) values ('".$idPersonne."','".$matricule."','".$idInt."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectue</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}
?>
<br/><br/><br/><br/>
<table border="1" align="center" width="800px" rules="all">
	<caption>Liste des agents grades</caption>
	<tr align="left">
		<th>IdPersonne</th><th>Matricule</th><th>IdInterruption</th>
	</tr>
	
<?php
	$liste=mysql_query("select idPersonne,matricule,idInt from agentgrade");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idPersonne']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idInt']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>
<tr> 
	<a href="saisiAgentGrade.php">Nouveau</a>&nbsp;&nbsp;
	<a href="rechercheAgentGrade.php">Rechercher</a>&nbsp;&nbsp;
	<a href="afficheAgentGrade.php">Modifier</a>&nbsp;&nbsp;
</tr>
</table>
</body>
</html>