<html>
<head>
	<title>interruption</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<body>
<br/>
<h1 class="pt" align="center">Modification</h1>
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
$result=mysql_query("select idGrade,idAgent,type,dateNomination from grade where idGrade='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierGrade.php" method="POST">
 <table border="0" width="500px" cellpadding="10px" align="center">
 <br/>
     <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>"  size="20px" /></td></tr>
	 <tr><td>Type:</td><td>
		<select name="type" value="<?php echo $liste['type'];?>"/>
				<option value="General de Brigarde">General de Brigarde</option>
				<option value="Colonel">Colonel</option>
				<option value="Lt-Colonel">Lt-Colonel</option>
				<option value="Commandant">Commandant</option>
				<option value="Capitaine">Capitaine</option>
				<option value="Lieutenant">Lieutenant</option> 
				<option value="Sous-Lieutenant">Sous-Lieutenant</option>
				<option value="Adjudant-Major">Adjudant-Major</option>
				<option value="Adjudant-Chef">Adjudant-Chef</option>
				<option value="Adjudant">Adjudant</option>
				<option value="Sergent-Chef">Sergent-Chef</option>
				<option value="Sergent">Sergent</option> 
				<option value="Caporal-Chef">Caporal-Chef</option>
				<option value="Caporal">Caporal</option>
				<option value="F/C">F/C</option> 
				<option value="1Classe">1Classe</option>
				<option value="2Classe">2Classe</option> 
			</select>
		</td></tr>
		<tr><td>Date Nomination:</td><td><input type="date" name="dateNomination" value="<?php echo $liste['dateNomination'];?>"  size="20px" /></td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idGrade" value="<?php echo $id;?> "size="35px" /></td></tr>
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
			$dateNomination=$_POST['dateNomination'];
			$type=$_POST['type'];
			$id=$_POST['idGrade'];
			$result=mysql_query("update grade set idAgent='".$idAgent."',type='".$type."',dateNomination='".$dateNomination."' where idGrade='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeGrade.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierGrade.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
<!--
<br/>
<table>
	<tr>
		<a href="afficheGrade.php">Retour</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>