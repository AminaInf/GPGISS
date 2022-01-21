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
<IMG SRC="../im/gs.png"  width=100px height= 250px id="im">
<table border="3px" align="center" width="800px" rules="all">
	<caption>LISTE DES GROUPES SANGUINS</caption>
	<tr align="left" border="2px">
		<th>IdGSanguin</th><th>Libelle</th>
	</tr>
	
<?php
	$liste=mysql_query("select idG,libelleG from groupesanguin");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idG']; ?></td>
		<td><?php echo $info['libelleG']; ?></td>
		<td>
			<a href="modifierGSanguin.php?id=<?php echo $info['idG']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>