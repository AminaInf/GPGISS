<html>
	<head>
	<title>mutation</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="choi.css"/>
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
$result=mysql_query("select idAgent from gpgiss.agent where idAgent='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<IMG SRC="./im/fon10.jpg" align=left height=283px id="im">
<h1 class="pt" align="center">Veuillez saisir la référence </h1>
<form action="refMutationBambey.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 
	  <tr><td>Agent:</td><td><input type="number" name="idAgent" value="<?php echo $liste['idAgent'];?>" size="20px" /></td></tr>
	 <tr><td>RefMutation:</td><td><input type="text" name="refMutt" size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idAgent" value="<?php echo $id;?> "size="35px" /></td></tr>
	 <tr><td colspan="2"><input type="submit" name="enreg" value="Valider" id="input"></td></tr>
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

	if(isset($_POST['enreg']))
		{
			$refMutt=$_POST['refMutt'];
			$id=$_POST['idAgent'];
			$result=mysql_query("update agent set refMutt='".$refMutt."' where idAgent='".$id."'");
			 
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeMutationBambey.php?mod=Insertion reussie");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:refMutationBambey.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</div> 
</body>
</html>