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
	<caption>Diplome</caption>
	<tr align="left">
		<th>IdDiplome</th><th>Matricule</th>
	</tr>
	
<?php
	$liste=mysql_query("select idDip,matricule from avoirdiplome");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idDip']; ?></td>
		<td><?php echo $info['matricule']; ?></td>
		<td>
			<a href="modifierADiplome.php?id=<?php echo $info['idDip']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>