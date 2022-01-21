<html>
<head> 	
	<title>Mutuel</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleLocal.css">

</head>
<body>
<?php
include('connexion.php');
/*	if(isset($_POST['Enregistrer']))
	
	{
		$numeroMutuel=$_POST['numeroMutuel'];
		$dateCreation=$_POST['dateCreation'];
				if(empty($_POST['numeroMutuel']) || empty($_POST['dateCreation']))
				{
					header('location:VerifMutuel.php?vide=veuillez remplir tous les champs&numeroMutuel='.$numeroMutuel.'&dateCreation='.$dateCreation);
					exit();
				}
	
				$result=mysql_query("insert into mutuel (numeroMutuel,dateCreation) values('".$numeroMutuel."','".$dateCreation."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
		$resultats=mysql_query("select numeroMutuel,dateCreation from mutuel");
		echo mysql_num_rows($resultats)."participants";
	}*/

?>
<br/><br/><br/>
<table border="2px" align="center" width="600px" rules="all">
<br/><br/><br/>
	<caption >LISTE DES MUTUELS</caption>
	<tr align="left" border="2px">
		<th>NumeroMutuel</th><th>DateCreation</th>
	</tr>
	
<?php
	$liste=mysql_query("select numeroMutuel,dateCreation from mutuel");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['numeroMutuel']; ?></td>
		<td><?php echo $info['dateCreation']; ?></td>
	</tr>
	<?php
}
?>

</table>
<br/>

<table>
<tr >
		<th>NombreParticipants</th>
	</tr></table>
<?php
		$nombreParticipants = mysql_query ("select numeroMutuel,dateCreation from mutuel");
		echo mysql_num_rows ($nombreParticipants) . " participants ";
		while ($info = mysql_fetch_array ($nombreParticipants))
	{
?>	
<?php
}
?>     
</body>
</html>