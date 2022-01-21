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
$result=mysql_query("select matricule,idCentre from etreliee where matricule='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierLiaison.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption></caption>
 <br/><br/><br/>
	 <tr><td>Matricule:</td><td><input type="number" name="matricule" value="<?php echo $liste['matricule'];?>" size="35px" /></td></tr>
	 <tr><td>IdCentre:</td><td><input type="number" name="idCentre" value="<?php echo $liste['idCentre'];?>" size="35px" /></td></tr>
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
			$matricule=$_POST['matricule'];
			$idCentre=$_POST['idCentre'];
			$id=$_POST['matricule'];
			$result=mysql_query("update etreliee set idCentre='".$idCentre."' where matricule='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeLiaison.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierLiaison.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>