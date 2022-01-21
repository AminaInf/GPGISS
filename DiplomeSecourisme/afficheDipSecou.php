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

<table border="3px" align="center" width="800px" rules="all">
	<caption>LISTE DIPLOME SECOURISME</caption>
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
		<td>
			<a href="modifierDipSecou.php?id=<?php echo $info['idSecou']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>