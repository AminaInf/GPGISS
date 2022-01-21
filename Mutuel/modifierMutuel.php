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
$result=mysql_query("select  numeroMutuel from mutuel where dateCreation='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/>
<form action="modifierMutuel.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier un mutuel:</caption>
 <br/><br/><br/>
	 <tr><td>NumeroMutuel:</td><td><input type="number" name="numeroMutuel" value="<?php echo $liste['numeroMutuel'];?>" size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="dateCreation" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$numeroMutuel=$_POST['numeroMutuel'];
			$id=$_POST['dateCreation'];
			$result=mysql_query("update mutuel set numeroMutuel='".$numeroMutuel."' where dateCreation='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeMutuel.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierMutuel.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>