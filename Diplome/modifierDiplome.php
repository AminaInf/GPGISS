<html>
<head>
	<title>Diplome</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="modif.css">
	</head>
<br/>
<body>
<h1 class="pt" align="center">Modifier un diplome</h1>
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
$result=mysql_query("select nomDip,idAgent from diplome where idDip='".$id."'");
while($liste=mysql_fetch_array($result))
	{
?>
<form action="modifierDiplome.php" method="POST">
 <table border="8px" width="500px" cellpadding="10px" align="center">
 <br/>
        <tr><td>Matricule:</td><td><input type="text" name="idAgent" value="<?php echo $liste['idAgent'];?>"  size="20px" /></td></tr>
		<tr><td>NomDiplome:</td><td>
				<input type="checkbox" name="nomDip[]" value="CFEE" />CFEE
				<br>
				<input type="checkbox" name="nomDip[]" value="BFEM" />BFEM
				<br>
				<input type="checkbox" name="nomDip[]" value="BAC" />BAC
				<br>
				<input type="checkbox" name="nomDip[]" value="LICENCE" />LICENCE
				<br>
				<input type="checkbox" name="nomDip[]" value="MASTER" />MASTER
				<br>
				<input type="checkbox" name="nomDip[]" value="DOCTORAT" />DOCTORAT
				<br>
				<input type="checkbox" name="nomDip[]" value="CASIS" />CASIS
				<br>
				<input type="checkbox" name="nomDip[]" value="CAP1" />CAP1
				<br>
				<input type="checkbox" name="nomDip[]" value="CAPT2" />CAPT2
				<br>
				<input type="checkbox" name="nomDip[]" value="CAPT2+CIA" />CAPT2+CIA
				<br>
				<input type="checkbox" name="nomDip[]" value="BS" />BS
				<br>
				<input type="checkbox" name="nomDip[]" value="BT" />BT
				<br>
				<input type="checkbox" name="nomDip[]" value="DAGO" />DAGO
		</td></tr>
	 <tr><td colspan="2"><input type="hidden" name="idDip" value="<?php echo $id;?> "size="20px" /></td></tr>
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
			$nomDip=implode($_POST['nomDip "\n" ']) ;
			$id=$_POST['idDip'];
			$result=mysql_query("update diplome set idAgent='".$idAgent."',nomDip='".$nomDip."' where idDip='".$id."'");
													
													
				if($result)
					{
						//echo "Modification bien effectue";
						header("location:listeDiplome.php?mod=Modification bien effectuee");
						exit();
					}
				else
					{
						//echo "Echec de modification";
						header("location:modifierDiplome.php?mod=Echec modification&id=$id");
						exit();
					}
		}
?>
</body>
</html>