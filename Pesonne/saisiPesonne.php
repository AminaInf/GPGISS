<html>
	<head> 	
	<title>Famille</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet"  href="styleDeco.css">

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
						<ul><li><a href="saisiPesonne.php" id="ao">Nouveau</a></li>
						<li><a href="listePesonne.php" id="al">Les parents</a></li>
						<li><a href="recherchePesonne.php" id="ar">Rechercher</a></li>
						<li><a href="affichePesonne.php" id="am">Modifier</a></li></ul>
						<br/>

	<h1>
	
		Veuillez renseigner les champs svp</h1>
	<div id="gauche">
	
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" /></td></tr>
		 <tr><td>Nom:</td><td><input type="text" name="nom" size="20px" /></td></tr>
		 <tr><td>Prenom:</td><td><input type="text" name="prenom" size="20px" /></td></tr>
		 <tr><td>DateNaissance:</td><td><input type="date" name="dateNaiss" size="20px" /></td></tr>
		 <tr><td>LieuNaissance:</td><td><input type="text" name="lieuNaiss" size="20px" /></td></tr>
		<tr><td>Profil:</td><td>
		<select name="profil">
				<option value="personneaprevenir">Personne a prevenir</option>
				<option value="epoux">Epoux</option>
				<option value="epouse">Epouse</option>
				<option value="enfant">Enfant</option>
			</select>
		</td></tr>
		<tr><td>Telephone:</td><td><input type="text" name="tel" size="20px" pattern = "[0-9]{9}"/></td></tr>
		<tr><td>Adresse:</td><td><input type="text" name="adresse" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistre" value="Enregistrer" class="btn"></td></tr>
	</table>
</form>

<?php
include('connexion.php');
	if(isset($_POST['Enregistre']))
	
	{
		$idAgent=$_POST['idAgent'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$dateNaiss=$_POST['dateNaiss'];
		$lieuNaiss=$_POST['lieuNaiss'];
		$profil=$_POST['profil'];
		$tel=$_POST['tel'];
		$adresse=$_POST['adresse'];
			$result=mysql_query("insert into personne (idPersonne,idAgent,nom,prenom,dateNaiss,lieuNaiss,profil,tel,adresse)
										values('','".$idAgent."','".$nom."','".$prenom."','".$dateNaiss."','".$lieuNaiss."','".$profil."'
										,'".$tel."','".$adresse."')");
		if($result)
		{
			echo "<font color='green' size='2'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='2'><p align='center'>Echec insertion</p></font>";
		}
	}

?>

	</div>
<!--	
<table>
	<tr>
		<a href="saisiPesonne.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="lsitePesonne.php" id="a2">Personnes</a>&nbsp;&nbsp;
	</tr>
	<a href="affichePrevention.php"  id="a3">Modifier</a>&nbsp;&nbsp;
</table>
-->
	<IMG SRC="../im/prs.png"   height=155px id="prs">
	 
</div>
</body>
</html>