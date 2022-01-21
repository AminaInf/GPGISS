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
<table border="1" align="center" width="800px" rules="all">
	<caption>Liste des compagnies</caption>
	<tr align="left" bgcolor="red">
		<th>Compagnie</th><th>Ville</th><th>NomUnite</th><th>Telephone</th><th>Email</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idCompagnie,nomVil,nomUnite,tel,mail from compagnie");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idCompagnie']; ?></td>
		<td><?php echo $info['nomVil']; ?></td>
		<td><?php echo $info['nomUnite']; ?></td>
		<td><?php echo $info['tel']; ?></td>
		<td><?php echo $info['mail']; ?></td>
		<td>
			<a href="modifierCompagnie.php?id=<?php echo $info['idCompagnie']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>