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
$result=mysql_query("select matricule,anneeDeco from decoagent where idDeco='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierDecoAg.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier une DecoAgent :</caption>
 <br/><br/><br/>
	 <tr><td>Matricule:</td><td><input type="number" name="matricule" value="<?php echo $liste['matricule'];?>" size="35px" /></td></tr>
	 <tr><td>AnneeDecoration:</td><td><input type="date" name="anneeDeco" value="<?php echo $liste['anneeDeco'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idDeco" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$anneeDeco=$_POST['anneeDeco'];
			$id=$_POST['idDeco'];
			$result=mysql_query("update decoagent set matricule='".$matricule."',anneeDeco='".$anneeDeco."' where idDeco='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeDecoAgent.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierDecoAg.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
<br/>
<table>
	<tr>
		<a href="afficheDecoAg.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>