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
$result=mysql_query("select idPersonne,matricule from agentgrade where idInt='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierAgentGrade.php" method="POST">
<table border="0" width="500px" cellpadding="10px" align="center">
<caption>Modification :</caption>
	 <tr><td>IdPersonne:</td><td><input type="number" name="idPersonne" value="<?php echo $liste['idPersonne'];?>" min='1' size="35px" /></td></tr>
	 <tr><td>Matricule:</td><td><input type="number" name="matricule" value="<?php echo $liste['matricule'];?>"  min='1' size="20px" /></td></tr>
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
			
			$idPersonne=$_POST['idPersonne'];
			$matricule=$_POST['matricule'];
			$id=$_POST['idInt'];
			$result=mysql_query("update agentgrade set idPersonne='".$idPersonne."',matricule='".$matricule."' where idInt='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeAgentGrade.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierAgentGrade.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>