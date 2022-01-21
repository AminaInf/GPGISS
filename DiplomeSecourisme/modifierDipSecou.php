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
$result=mysql_query("select typeSecou from diplomesecourisme where idSecou='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierDipSecou.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier un diplome de secourisme :</caption>
 <br/><br/><br/>
	 <tr><td>TypeSecourisme:</td><td><input type="text" name="typeSecou" value="<?php echo $liste['typeSecou'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idSecou" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$typeSecou=$_POST['typeSecou'];
			$id=$_POST['idSecou'];
			$result=mysql_query("update diplomesecourisme set typeSecou='".$typeSecou."' where idSecou='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeDipSecou.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierDipSecou.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>