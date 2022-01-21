<html>
<head> 	
	<title>Permis</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleDeco.css">

</head>
<body>

<div id ="conteneur">
<?php
session_start();
?>
<header>
		  <IMG SRC="../im/header.png"   height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> <table>
	<tr>
		<a href="saisiPermis.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="listePermis.php" id="a2">Permis</a>&nbsp;&nbsp;
	</tr>
</table>
		-->

	</header>
						<ul><li><a href="./Permis/saisiPermis.php" id="ao">Permis</a></li>
						<li><a href="./Permis/listePermis.php" id="al">Liste des Permis</a></li>
						<li><a href="./Permis/affichePermis.php" id="am">Modifier</a></li>
						<li><a href="./Permis/recherchePermis.php" id="ar">Recherche</a></li>	</ul><br/>
	<h1>
	
		Veuillez renseigner les champs svp</h1>
<br/>
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		<tr><td>NumeroPermis:</td><td><input type="number" name="numeroPermis" size="20px" /></td></tr>
		<tr><td>TypePermis:</td><td>
			<select name="type">
					<option value="VL">VL</option>
					<option value="TC">TC</option>
					<option value="PL">PL</option>
				</select>
			</td></tr>
		 <tr><td>DureePermis:</td><td><input type="text" name="duree" size="20px" /></td></tr>
		 <tr><td>EtatPermis:</td><td><input type="text" name="etat" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$numeroPermis=$_POST['numeroPermis'];
		$type=$_POST['type'];
		$duree=$_POST['duree'];
		$etat=$_POST['etat'];
				$result=mysql_query("insert into permis (numeroPermis,type,duree,etat) values('".$numeroPermis."','".$type."','".$duree."','".$etat."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}

?>

<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
</div>
</body>
</html>
