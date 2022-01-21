<br>
<html>
<head>
	<title>decoration</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<h1 id="p" align="center">modifier une decoration</h1>
<br>
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
$result=mysql_query("select idDeco,typeDeco,anneeDeco,idAgent from decoration where idDeco='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierDecoration.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
	 <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>" size="20px" /></td></tr>
	 <tr><td>TypeDecoration:</td><td>
			<select name="typeDeco" value="<?php echo $liste['typeDeco'];?>"/>
				<option value="MEDAILLE D'HONNEUR SP">MEDAILLE D'HONNEUR SP</option>
				<option value="MEDAILLE MILITAIRE">MEDAILLE MILITAIRE</option>
				<option value="CHEVALIER ORDRE DU MERITE">CHEVALIER ORDRE DU MERITE</option>
				<option value="OFFICIER ORDRE DU MERITE">OFFICIER ORDRE DU MERITE</option>
				<option value="COMMANDEUR ORDRE DU MERITE">COMMANDEUR ORDRE DU MERITE</option>
				<option value="CHEVALIER ORDRE NATIONAL DU LION">CHEVALIER ORDRE NATIONAL DU LION</option> 
				<option value="OFFICIER ORDRE NATIONAL DU LION">OFFICIER ORDRE NATIONAL DU LION</option>
				<option value="COMMANDEUR ORDRE NATIONAL DU LION">COMMANDEUR ORDRE NATIONAL DU LION</option>
			</select>
		</td></tr>
		<tr><td>Année Décoration</td><td><input type="date" name="anneeDeco" value="<?php echo $liste['anneeDeco'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idDeco" value="<?php echo $id;?> "size="20px" /></td></tr>
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
			$typeDeco=$_POST['typeDeco'];
			$anneeDeco=$_POST['anneeDeco'];
			$id=$_POST['idDeco'];
			$result=mysql_query("update decoration set idAgent='".$idAgent."',typeDeco='".$typeDeco."',anneeDeco='".$anneeDeco."' where idDeco='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeDecoration.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierDecoration.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>