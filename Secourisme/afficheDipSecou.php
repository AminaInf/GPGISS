<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>
<br/>
<body>
<h1 class="pt" align="center">Liste des diplomes de secourisme des agents</h1>
<?php
session_start();
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

<table border="8px" align="center" width="800px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Type Secourisme</th><th>Date Secourisme</th><th>Action</th>
	</tr>
	
<?php
	$liste=mysql_query("select idSecou,typeSecou,idAgent,dateSecourisme from diplomesecourisme");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['typeSecou']; ?></td>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['dateSecourisme']; ?></td>
		<td>
			<a href="modifierDipSecou.php?id=<?php echo $info['idSecou']; ?>" style="text-decoration:none">Modifier</a>&nbsp;&nbsp;
		</td>
		
	</tr>
<?php
}
?>

</table>
</body>
</html>