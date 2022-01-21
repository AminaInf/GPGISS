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
$result=mysql_query("select libelleG from groupesanguin where idG='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierGSanguin.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier un groupe sanguin :</caption>
 <br/><br/><br/>
	 <tr><td>Libelle:</td><td>
			<select name="libelleG" value="<?php echo $liste['libelleG'];?>"/>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="A+">A+</option> 
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
				</select>
			</td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idG" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$libelleG=$_POST['libelleG'];
			$id=$_POST['idG'];
			$result=mysql_query("update groupesanguin set libelleG='".$libelleG."' where idG='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeGSanguin.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierGSanguin.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>