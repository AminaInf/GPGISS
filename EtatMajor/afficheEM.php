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
<table border="1" align="center" width="900px" rules="all">
	<caption>Liste des agents</caption>
	<tr align="left">
		<th>IdEtatMajor</th>
	</tr>
	
<?php
	$liste=mysql_query("select id from etatmajor");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['id']; ?></td>
		<td>
			<a href="modifierEM.php?idA=<?php echo $info['id']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table> 