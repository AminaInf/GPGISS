<html>
<head> 	
	<title>Punition</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<br/><br/>
<h1 align="center" class="pt">Modifier une punition</h1>
<?php
session_start();
/* 
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/

  	
include('connexion.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$result=mysql_query("select idPunition,idAgent,nature,duree,datePunition from punition where idPunition='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/>
<form action="modifierPunition.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <br/><br/><br/>
	 <tr><td>Matrciule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>" size="35px" /></td></tr>
	 <tr><td>Nature:</td><td><input type="text" name="nature" value="<?php echo $liste['nature'];?>" size="35px" /></td></tr>
	 <tr><td>Duree:</td><td><input type="text" name="duree" value="<?php echo $liste['duree'];?>" size="35px" /></td></tr>
	 <tr><td>Date Punition:</td><td><input type="text" name="datePunition" value="<?php echo $liste['datePunition'];?>" size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idPunition" value="<?php echo $id;?> "size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="submit" name="modifier" value="modifier"></td></tr>
</table>
</form>
<?php
	}
}
?>

<?php
 if(isset($_GET['mod']))
 	{
 		echo "<font color='red' size='4'><p align='center'>".$_GET['mod']."</p></font>";
 	}
?>
<?php

	if(isset($_POST['modifier']))
		{
			$idAgent=$_POST['idAgent'];
			$nature=$_POST['nature'];
			$duree=$_POST['duree'];
			$datePunition=$_POST['datePunition'];
			$id=$_POST['idPunition'];
			$result=mysql_query("update punition set idAgent='".$idAgent."',nature='".$nature."',duree='".$duree."',datePunition='".$datePunition."' where idPunition='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listePunitions.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierPunition.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
<!--
<table>
	<tr>
		<a href="affichePunition.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>