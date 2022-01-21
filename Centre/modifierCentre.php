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
$result=mysql_query("select idVil,nomCentre,telephone,email from centre where idCentre='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierCentre.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier un centre :</caption>
 <br/><br/><br/>
	 <tr><td>IdVille:</td><td><input type="number" name="idVil" value="<?php echo $liste['idVil'];?>" size="35px" /></td></tr>
	 <tr><td>NomCentre:</td><td><input type="text" name="nomCentre" value="<?php echo $liste['nomCentre'];?>" size="20px" /></td></tr>
	 <tr><td>Telephone:</td><td><input type="number" name="telephone" value="<?php echo $liste['telephone'];?>" size="35px" /></td></tr>
	 <tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $liste['email'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idCentre" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$idVil=$_POST['idVil'];
			$nomCentre=$_POST['nomCentre'];
			$telephone=$_POST['telephone'];
			$email=$_POST['email'];
			$id=$_POST['idCentre'];
			$result=mysql_query("update centre set idVil='".$idVil."',nomCentre='".$nomCentre."',
													telephone='".$telephone."',
													email='".$email."'
													where idCentre='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeCentre.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierCentre.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>