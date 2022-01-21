
<html>
<head>
	<meta charset="utf-8">
	<title>modifier une compagnie</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylec.css">
</head>
<body>
<div id ="conteneur">
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
$result=mysql_query("select idUnite,idVil,nomComp,telephone,email from compagnie where idCompagnie='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierCompagnie.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption id="p">modifier une compagnie </caption>
 <br/><br/><br/>
	 <tr><td>IdUnite:</td><td><input type="number" name="idUnite" value="<?php echo $liste['idUnite'];?>" size="35px" /></td></tr>
	 <tr><td>IdVille:</td><td><input type="number" name="idVil" value="<?php echo $liste['idVil'];?>" size="35px" /></td></tr>
	 <tr><td>NomCompagnie:</td><td><input type="text" name="nomComp" value="<?php echo $liste['nomComp'];?>" size="20px" /></td></tr>
	 <tr><td>Telephone:</td><td><input type="number" name="telephone" value="<?php echo $liste['telephone'];?>" size="35px" /></td></tr>
	 <tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $liste['email'];?>" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idCompagnie" value="<?php echo $id;?> "size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="submit" name="modifier" value="modifier" id="btn"></td></tr>
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
			$idUnite=$_POST['idUnite'];
			$idVil=$_POST['idVil'];
			$nomComp=$_POST['nomComp'];
			$telephone=$_POST['telephone'];
			$email=$_POST['email'];
			$id=$_POST['idCompagnie'];
			$result=mysql_query("update compagnie set idUnite='".$idUnite."',idVil='".$idVil."',nomComp='".$nomComp."',
													telephone='".$telephone."',email='".$email."' where idCompagnie='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeCompagnie.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierCompagnie.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
	</div>
</body>
</html>