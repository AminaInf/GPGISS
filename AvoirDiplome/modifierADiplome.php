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
$result=mysql_query("select matricule from association7 where idDip='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierADiplome.php" method="POST">
<table border="0" width="500px" cellpadding="10px" align="center">
<caption>Modification :</caption>
	 <tr><td>Matricule:</td><td><input type="number" name="matricule" value="<?php echo $liste['matricule'];?>"  min='1' size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idDip" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$id=$_POST['idDip'];
			$result=mysql_query("update avoirdiplome set matricule='".$matricule."' where idDip='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeADiplome.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierADiplome.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>