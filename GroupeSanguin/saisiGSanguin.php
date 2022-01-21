<html>
<head> 	
	<title>Groupe Sanguin</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleLocal.css">

</head>
<body>
<?php
session_start();
?>
<div id ="conteneur">
<header>
		  <IMG SRC="../im/header.png"   height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
<br/><br/>
 <IMG SRC="../im/gs.png"  width=55px height= 250px id="im">
<form action="" method="POST">
	<table border="0" width="300px" cellpadding="10px" align="center">
		 <tr><td>Groupe Sanguin:</td><td>
			<select name="libelleG">
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="A+">A+</option> 
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
				</select>
			</td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		//$idG=$_POST['idG'];
		$libelleG=$_POST['libelleG'];
				/*if(empty($_POST['idG']) || empty($_POST['libelleG']))
				{
					header('location:VerifGSanguin.php?vide=veuillez remplir tous les champs&idG='.$idG.'&libelleG='.$libelleG);
					exit();
				}*/
	
				$result=mysql_query("insert into groupesanguin (idG,libelleG) values ('','".$libelleG."')");
		if($result)
		{
			echo "<font color='green' size='5'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}

?>
<br/>
<table>
	<tr>
		<a href="listeGSanguin.php" id="a1">ListeGrpeSanguin</a>&nbsp;&nbsp;
		<a href="saisiGSanguin.php" id="a2">Nouveau</a>&nbsp;&nbsp;
	</tr>
</table>
<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
</body>
</html>
