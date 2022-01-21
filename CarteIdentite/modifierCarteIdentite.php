<html>
<head>
	<meta charset="utf-8">
	<title>modifier un centre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylec.css">
</head>
<body><div id ="conteneur">
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
$result=mysql_query("select idAgent,dateDeliverance,dateExpiration from cartedidentite where numeroCNI='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierCarteIdentite.php" method="POST">
<table border="0" width="500px" cellpadding="10px" align="center">
<caption>Modification :</caption>
	 <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>"  size="20px" /></td></tr>
	 <tr><td>DateDeliverance:</td><td><input type="date" name="dateDeliverance" value="<?php echo $liste['dateDeliverance'];?>"  size="35px" /></td></tr>
	 <tr><td>DateExpiration:</td><td><input type="date" name="dateExpiration" value="<?php echo $liste['dateExpiration'];?>"  size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="numeroCNI" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$dateDeliverance=$_POST['dateDeliverance'];
			$dateExpiration=$_POST['dateExpiration'];
			$id=$_POST['numeroCNI'];
			$result=mysql_query("update cartedidentite set idAgent='".$idAgent."',dateDeliverance='".$dateDeliverance."',dateExpiration='".$dateExpiration."' where numeroCNI='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeCarteIdentite.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierCarteIdentite.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</div>
</body>
</html>