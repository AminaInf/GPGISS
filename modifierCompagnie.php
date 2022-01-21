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
$result=mysql_query("select nomVil,nomUnite,tel,mail from compagnie where idCompagnie='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierCompagnie.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier une compagnie :</caption>
 <br/><br/><br/>
	 <tr><td>Ville:</td><td><input type="text" name="nomVil" value="<?php echo $liste['nomVil'];?>" size="20px" /></td></tr>
	 <tr><td>NomUnite:</td><td><input type="text" name="nomUnite" value="<?php echo $liste['nomUnite'];?>" size="20px" /></td></tr>
	 <tr><td>Telephone:</td><td><input type="text" name="tel" value="<?php echo $liste['tel'];?>" size="20px" /></td></tr>
	 <tr><td>Email:</td><td><input type="text" name="mail" value="<?php echo $liste['mail'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idCompagnie" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$nomVil=$_POST['nomVil'];
			$nomUnite=$_POST['nomUnite'];
			$tel=$_POST['tel'];
			$mail=$_POST['mail'];
			$id=$_POST['idCompagnie'];
			$result=mysql_query("update compagnie set nomVil='".$nomVil."',nomUnite='".$nomUnite."',
													tel='".$tel."',
													mail='".$mail."'
													where idCompagnie='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeCompagnie.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierCompagnie.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>