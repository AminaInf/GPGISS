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
		$result=mysql_query("select idFonction,dateDebut,dateFIN from fonctionagent where matricule='".$id."'");
		while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierFctAgent.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier une fonctionagent :</caption>
 <br/><br/><br/>	
	<tr><td>IdFonction:</td><td><input type="text" name="idFonction" value="<?php echo $liste['idFonction'];?>" size="20px" /></td></tr>
	<tr><td>DateDebut:</td><td><input type="date" name="dateDebut" value="<?php echo $liste['dateDebut'];?>" size="35px" /></td></tr>
	<tr><td>DateFin:</td><td><input type="date" name="dateFIN" value="<?php echo $liste['dateFIN'];?>" size="35px" /></td></tr>
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
			$idFonction=$_POST['idFonction'];
			$dateDebut=$_POST['dateDebut'];
			$dateFin=$_POST['dateFIN'];
			$id=$_POST['matricule'];
			$result=mysql_query("update fonctionagent set idFonction='".$idFonction."',dateDebut='".$dateDebut."',dateFin='".$dateFIN."', where matricule='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeFctAgent.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierFctAgent.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>