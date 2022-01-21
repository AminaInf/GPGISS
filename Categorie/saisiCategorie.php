	<html>
	<head>
		
		 <title>Acceuil</title>
				<meta charset="utf-8" />
				<meta name="viewport" content="width-device-width, initial-scale=1">
				<link rel="stylesheet" href="cssCate.css">

	</head>
	<body>
	<?php
	session_start();
	?>
	<div id ="conteneur">
	
	<header>
		 <IMG SRC="../im/header.png"  width=1100px height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
	
	<br/><br/>
					<ul><li><a href="saisiCategorie.php" id="ao">Categorie</a></li>
						<li><a href="listeCategorie.php" id="al">Liste des categories</a></li>
						<li><a href="afficheCategorie.php" id="am">Modifier</a></li>
						<li><a href="rechercheCategorie.php" id="ar">Rechercher</a></li>
						
			<br/>			
	<p >
	
		veuillez renseignez les champs svp </p> 
	<div id="gauche">
	<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" /></td></tr>
		 <tr><td>Type Categorie:</td><td>
			<select name="nomCategorie">
				<option value="OFF">OFF</option>
				<option value="S/OFF">S/OFF</option>
				<option value="MDR">MDR</option>
			</select>
		 </td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistre" value="Enregistrer" class="btn"></td></tr>
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistre']))
	
	{
		//recuperation des matricules dans centre
		
		
		$idAgent=$_POST['idAgent'];
		$nomCategorie=$_POST['nomCategorie'];
			
			$result=mysql_query("insert into categorie (idCat,idAgent,nomCategorie) values('','".$idAgent."','".$nomCategorie."')");
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
</div>
	</div>
	</body>
	</html>
