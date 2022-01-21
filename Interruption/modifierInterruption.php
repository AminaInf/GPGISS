<html>
<head>
	<title>interruption</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
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
$result=mysql_query("select dateDebut,drds,idAgent from interruption where idInt='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierInterruption.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier une interruption:</caption>
 <br/><br/><br/>
     <tr><td>DateDebut:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>" size="35px" /></td></tr>
	 <tr><td>Date Debut:</td><td><input type="date" name="dateDebut" value="<?php echo $liste['dateDebut'];?>" size="35px" /></td></tr>
	 <tr><td>Date Rectifié Depart Service:</td><td><input type="date" name="drds" value="<?php echo $liste['drds'];?>" size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idInt" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$dateDebut=$_POST['dateDebut'];
			$drds=$_POST['drds'];
			$id=$_POST['idInt'];
			$result=mysql_query("update interruption set idAgent='".$idAgent."',dateDebut='".$dateDebut."',drds='".$drds."' where idInt='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeInterruption.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierInterruption.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
<!--
<table>
	<tr>
		<a href="afficheInterruption.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>