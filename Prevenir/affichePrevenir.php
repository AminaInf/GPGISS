<?php
session_start();
/*
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/
?>
<?php
	include('connexion.php');
?>

<?php
/* message de succes pour modification */
 if(isset($_GET['mod']))
 	{
 		echo "<font color='green' size='4'><p align='center'>".$_GET['mod']."</p></font>";
 	}
?>
<br/><br/><br/>
<table border="3px" align="center" width="800px" rules="all">
	<caption>LISTE DES PREVENTIONS</caption>
	<tr align="left" border="2px">
		<th>Matricule</th><th>IdPersonne</th><th>Telephone</th>
	</tr>
	
<?php
	$liste=mysql_query("select  matricule,idPersonne,tel from prevenir");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['idPersonne']; ?></td>
		<td><?php echo $info['tel']; ?></td>
		<td>
			<a href="modifierPrevenir.php?id=<?php echo $info['matricule']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>