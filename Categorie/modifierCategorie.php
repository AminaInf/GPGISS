<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>
<br/>
<body>
<h1 class="pt" align="center">Modifier une categorie d'un agent</h1>
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
$result=mysql_query("select idCat,nomCategorie,idAgent from categorie where idCat='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierCategorie.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <br/>
     <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>" size="20px" /></td></tr>
     <tr><td>Nom Categorie:</td><td>
			<select name="nomCategorie" value="<?php echo $liste['nomCategorie'];?>" />
				<option value="OFF">OFF</option>
				<option value="S/OFF">S/OFF</option>
				<option value="MDR">MDR</option>
			</select>
	 </td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idCat" value="<?php echo $id;?> "size="20px" /></td></tr>
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
			$nomCategorie=$_POST['nomCategorie'];
			$id=$_POST['idCat'];
			$result=mysql_query("update categorie set idAgent='".$idAgent."',nomCategorie='".$nomCategorie."' where idCat='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeCategorie.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierCategorie.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>