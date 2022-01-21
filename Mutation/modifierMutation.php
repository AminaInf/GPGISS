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
	$result=mysql_query("select matricule,idCompagnie,dateMut,nbreMutation from mutation where refMutt='".$id."'");
	while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierMutation.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier une mutation :</caption>
	 <tr><td>Matricule:</td><td><input type="number" name="matricule" min='1' value="<?php echo $liste['matricule'];?>" size="35px" /></td></tr>
	 <tr><td>IdCompagnie:</td><td><input type="number" name="idCompagnie" min='1' value="<?php echo $liste['idCompagnie'];?>" size="35px" /></td></tr>
	 <tr><td>DateMutation:</td><td><input type="date" name="dateMut" value="<?php echo $liste['dateMut'];?>" size="35px" /></td></tr>
	 <tr><td>NombreMutation:</td><td><input type="number" name="nbreMutation" value="<?php echo $liste['nbreMutation'];?>" size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="refMutt" value="<?php echo $id;?>  "size="35px" /></td></tr>
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
			$matricule=$_POST['matricule'];
			$idCompagnie=$_POST['idCompagnie'];
			$dateMut=$_POST['dateMut'];
			$id=$_POST['refMutt'];
			$result=mysql_query("update mutation set matricule='".$matricule."',idCompagnie='".$idCompagnie."',dateMut='".$dateMut."',nbreMutation='".$nbreMutation."'
										where refMutt='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeMutation.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierMutation.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>