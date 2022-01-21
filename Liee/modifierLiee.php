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
$result=mysql_query("select idInt from liee where matricule='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/>
<form action="modifierLier.php" method="POST">
 <table border="0" width="600px" cellpadding="10px" align="center">
 <caption>Modification :</caption>
 <br/><br/><br/>
	 <tr><td>IdInterruption:</td><td><input type="number" name="idInt" value="<?php echo $liste['idInt'];?>" min='1' size="20px" /></td></tr>
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
			$idInt=$_POST['idInt'];
			$id=$_POST['matricule'];
			$result=mysql_query("update liee set idInt='".$idInt."' where matricule='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeLier.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierLier.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>