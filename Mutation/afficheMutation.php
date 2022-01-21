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
<br/><br/><br/><br/>
<table border="3px" align="center" width="800px" rules="all">
	<caption>LISTE DES MUTATIONS</caption>
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
		<td>
			<a href="modifierMutation.php?id=<?php echo $info['refMutt']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>