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
$result=mysql_query("select population from localite where nomVil='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierLocalite.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier une localite :</caption>
 <br/><br/><br/>
	 <tr><td>Population:</td><td><input type="text"  name="population" value="<?php echo $liste['population'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="nomVil" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$population=$_POST['population'];
			$id=$_POST['nomVil'];
			$result=mysql_query("update localite set population='".$population."' where nomVil='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeLocalite.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierLocalite.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>