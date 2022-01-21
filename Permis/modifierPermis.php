<html>
<head> 	
	<title>Permis</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
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
$result=mysql_query("select type,duree,etat from permis where numeroPermis='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<br/><br/><br/>
<form action="modifierPermis.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <caption>modifier un permis :</caption>
 <br/><br/><br/>
	 <tr><td>Type:</td><td><input type="text" name="type" value="<?php echo $liste['type'];?>" size="35px" /></td></tr>
	 <tr><td>Duree:</td><td><input type="text" name="duree" value="<?php echo $liste['duree'];?>" size="35px" /></td></tr>
	 <tr><td>Etat:</td><td><input type="text" name="etat" value="<?php echo $liste['etat'];?>" size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="numeroPermis" value="<?php echo $id;?> "size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="submit" name="modifier" value="modifier"></td></tr>
</table>
</form>
<?php
	}
}
?>
</body>
</html>
<?php
 if(isset($_GET['mod']))
 	{
 		echo "<font color='red' size='4'><p align='center'>".$_GET['mod']."</p></font>";
 	}
?>
<?php

	if(isset($_POST['modifier']))
		{
			$type=$_POST['type'];
			$duree=$_POST['duree'];
			$etat=$_POST['etat'];
			$id=$_POST['numeroPermis'];
			$result=mysql_query("update permis set type='".$type."',duree='".$duree."',etat='".$etat."' where numeroPermis='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listePermis.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierPermis.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
<table>
	<tr>
		<a href="affichePermis.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>