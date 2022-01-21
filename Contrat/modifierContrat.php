<html>
	<head>
	<title>Contrat</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="modif.css"/> -->
	</head>
<body>
<br/><br/>
<h1 class="pt" align="center">Modifier le contrat d'un agent </h1>
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
$result=mysql_query("select idAgent,debutContrat,finContrat from contrat where idContrat='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierContrat.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <br/><br/><br/>
	 <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>" size="35px" /></td></tr>
	 <tr><td>DebutContrat:</td><td><input type="date" name="debutContrat" value="<?php echo $liste['debutContrat'];?>" size="20px" /></td></tr>
	 <tr><td>FinContrat:</td><td><input type="date" name="finContrat" value="<?php echo $liste['finContrat'];?>" size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idContrat" value="<?php echo $id;?> "size="35px" /></td></tr>
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
		
		    $idAgent=$_POST['idAgent'];
			$debutContrat=$_POST['debutContrat'];
			$finContrat=$_POST['finContrat'];
			$id=$_POST['idContrat'];
			$result=mysql_query("update contrat set idAgent='".$idAgent."',debutContrat='".$debutContrat."',
													finContrat='".$finContrat."' where idContrat='".$id."'");
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeContrat.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierContrat.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>