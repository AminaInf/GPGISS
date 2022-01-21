<html>
<head> 	
	<title>Punition</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleDeco.css">

</head>
<body>

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
$result=mysql_query("select idPunition,datePunition from punitionagent where matricule='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierPunitionAgent.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>Modification :</caption>
 <br/><br/><br/>
		<tr><td>IdPunition:</td><td><input type="number" name="idPunition" value="<?php echo $liste['idPunition'];?>" size="35px" /></td></tr>
		<tr><td>DatePunition:</td><td><input type="date" name="datePunition" value="<?php echo $liste['datePunition'];?>" size="20px" /></td></tr>
		<tr><td colspan="2"><input type="hidden" name="matricule" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$idPunition=$_POST['idPunition'];
			$datePunition=$_POST['datePunition'];
			$id=$_POST['matricule'];
			$result=mysql_query("update punitionagent set idPunition='".$idPunition."',datePunition='".$datePunition."' where matricule='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listePunitionAg.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierPunitionAgent.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>