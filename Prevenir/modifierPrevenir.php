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
$result=mysql_query("select idPersonne,tel from prevenir where matricule='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/>
<form action="modifierPrevenir.php" method="POST">
 <table border="0" width="600px" cellpadding="10px" align="center">
 <caption>Modification :</caption>
 <br/><br/><br/>
	 <tr><td>IdPersonne:</td><td><input type="number" name="idPersonne" value="<?php echo $liste['idPersonne'];?>" min='1' size="20px" /></td></tr>
	 <tr><td>Telephone:</td><td><input type="number" name="tel" value="<?php echo $liste['tel'];?>" size="35px" /></td></tr>
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
			$idPersonne=$_POST['idPersonne'];
			$tel=$_POST['tel'];
			$id=$_POST['matricule'];
			$result=mysql_query("update prevenir set idPersonne='".$idPersonne."',tel='".$tel."' where matricule='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listePrevenir.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierPrevenir.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>