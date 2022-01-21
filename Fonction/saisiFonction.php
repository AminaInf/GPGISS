<html>
	<head>
		<title>Fonction</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" href="styleDeco.css"/>

	</head>
<body>
	<div id ="conteneur">
	<?php
	session_start();
	?>
	<header>
		  <IMG SRC="../im/header.png"   height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->
		<ul><li><a href="saisiFonction.php" id="ao">Nouvelle</a></li>
						<li><a href="afficheFonction.php" id="am">Modifier</a></li>
						<li><a href="listeFonction.php" id="al">Liste Fonction</a></li>
						<li><a href="rechercheFonction.php" id="ar">Rechercher</a></li>
						<!--<li><a href="saisiDipSecou.php" id="anu">Annuler</a></li>-->
						</ul>
						<br/><br/>
<h1>
	
		Veuillez renseigner les champs svp</h1> 
	
	
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
	    <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="35px" /></td></tr>
		<tr><td>Type Fonction:</td><td>
		<select name="typeFonction">
				<option value="CDT dunite">CDT d'unite</option>
				<option value="Chef dagres">Chef d'agres</option>
				<option value="Chef dequipe">Chef d'equipe</option>
				<option value="Servant">Servant</option>
				<option value="Conducteur">Conducteur</option>
				<option value="Chef Comptable">Chef Comptable</option> 
				<option value="Chef de Garage">Chef de Garage</option>
				<option value="Chef poste de Sante">Chef poste de Sante</option>
				<option value="Chef BOT">Chef BOT</option>
				<option value="Chef BCOT">Chef BCOT</option>
				<option value="Chef CCOT">Chef CCOT</option>
				<option value="Secretaire">Secretaire</option> 
				<option value="Infirmier">Infirmier</option>
				<option value="Stationnaire">Stationnaire</option>
				<option value="Mecanicien">Mecanicien</option>
				<option value="Aide Mecanicien">Aide Mecanicien</option>
				<option value="Chef GREP">Chef GREP</option>
				<option value="Plongeur">Plongeur</option> 
				<option value="OD">OD</option>
				<option value="Clairon">Clairon</option> 
		</select>
		</td></tr>
		<tr><td>Date Debut:</td><td><input type="date" name="dateDebut" size="20px" /></td></tr>
		 <tr><td>Date Fin:</td><td><input type="date" name="dateFin" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistre" value="Enregistrer" class="btn"></td></tr>
		 
	</table>
</form>

<?php
//INSERTION A LA BASE DE DONNEES
include('connexion.php');
	if(isset($_POST['Enregistre']))
	
	{
		$idAgent=$_POST['idAgent'];
		$typeFonction=$_POST['typeFonction'];
		$dateDebut=$_POST['dateDebut'];
		$dateFin=$_POST['dateFin'];
				$result=mysql_query("insert into fonction (idFonction,idAgent,typeFonction,dateDebut,dateFin) values 
							('','".$idAgent."','".$typeFonction."','".$dateDebut."','".$dateFin."')");
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
<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
<!--
<table>
	<tr>
	<a href="saisiFonction.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="listeFonction.php" id="a1">Liste Fonction</a>&nbsp;&nbsp;
	</tr>
	</table 
	-->
	
<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
	<IMG SRC="../im/footer.png" id="ft">
</div>
</body>
</html>
