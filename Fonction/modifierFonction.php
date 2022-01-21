<br/>
<html>
	<head>
		<title>Fonction</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" href="modif.css">

	</head>
<body>
<br/>
<h1 class="pt" align="center">Modifier une fonction d'un agents</h1>
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
$result=mysql_query("select typeFonction,dateDebut,dateFin,idAgent from fonction where idFonction='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/><br/>
<form action="modifierFonction.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier une fonction :</caption>
 <br/>
     <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>"  size="20px" /></td></tr>
	 <tr><td>TypeFonction:</td><td>
		<select name="typeFonction" value="<?php if(isset($_GET['typeFonction'])) {echo $_GET['typeFonction']; } else {echo '';} ?>"/>
				<option value="CDT dUNITE">CDT dUNITE</option>
				<option value="Chef dagres">Chef dagres</option>
				<option value="Chef dequipe">Chef dequipe</option>
				<option value="Servant">Servant</option>
				<option value="Conducteur">Conducteur</option>
				<option value="Chef Comptable">Chef Comptable</option> 
				<option value="Chef de Garage">Chef de Garage</option>
				<option value="Chef poste de Sante">Chef poste de Sante</option>
				<option value="Chef BOT">Chef BOT</option>
				<option value="Chef BCOT">Chef BCOT</option>
				<option value="Chef CCOT">Chef CCOT</option>
				<option value="Secretaire">Secretaire</option> 
				<option value="Infirmier">Infirmier</option>
				<option value="Stationnaire">Stationnaire</option>
				<option value="Mecanicien">Mecanicien</option>
				<option value="Aide Mecanicien">Aide Mecanicien</option>
				<option value="Chef GREP">Chef GREP</option>
				<option value="Plongeur">Plongeur</option> 
				<option value="OD">OD</option>
				<option value="Clairon">Clairon</option> 
			</select>
		</td></tr>
	<tr><td>Date Debut:</td><td><input type="date" name="dateDebut" value="<?php echo $liste['dateDebut'];?>"  size="20px" /></td></tr>
	 <tr><td>Date Fin:</td><td><input type="date" name="dateFin" value="<?php echo $liste['dateFin'];?>"  size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idFonction" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$typeFonction=$_POST['typeFonction'];
			$dateDebut=$_POST['dateDebut'];
			$dateDebut=$_POST['dateDebut'];
			$id=$_POST['idFonction'];
			$result=mysql_query("update fonction set idAgent='".$idAgent."', typeFonction='".$typeFonction."',dateDebut='".$dateDebut."',dateFin='".$dateFin."' where idFonction='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeFonction.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierFonction.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>