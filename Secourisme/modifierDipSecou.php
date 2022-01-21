<html>
<head>
	<meta charset="utf-8">
	<title>Secourisme</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="modif.css">
	</head>
<br/>
<body>
<h1 class="pt" align="center">Modifier un diplome de secourisme</h1>
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
$result=mysql_query("select typeSecou,dateSecourisme,idAgent from diplomesecourisme where idSecou='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierDipSecou.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <br/>
     <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>" size="20px" /></td></tr>
     <tr><td>Type Secourisme:</td><td><input type="text" name="typeSecou" value="<?php echo $liste['typeSecou'];?>" size="20px" /></td></tr>
	 <tr><td>Date Secourisme:</td><td><input type="date" name="dateSecourisme" value="<?php echo $liste['dateSecourisme'];?>" size="20px" /></td></tr>
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
			$idAgent=$_POST['idAgent'];
			$typeSecou=$_POST['typeSecou'];
			$dateSecourisme=$_POST['dateSecourisme'];
			$id=$_POST['idSecou'];
			$result=mysql_query("update diplomesecourisme set idAgent='".$idAgent."',typeSecou='".$typeSecou."',dateSecourisme='".$dateSecourisme."' where idSecou='".$id."'");
													
													
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
</body>
</html>