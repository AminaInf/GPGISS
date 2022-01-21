<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="./Compagnie/cssComp.css">

	</head>
<body>
	
	<div id ="conteneur">
	
	<header>
		 <IMG SRC="./im/header.png"  width=1300px height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
	
	<nav>
			<label for="menu-mobile" class="menu-mobile">Menu</label>
			<input type="checkbox" id="menu-mobile" role="button">
		 <ul id ="menu">
			 <li class="menu-ac">
				<a href="index.php">Acceuil</a>
			</li>
			 <li class="menu-contr">
				<a href="#">Contrat</a>
				  <ul class="submenu"> 
				  
					<li><a href="./Interruption/saisiInterruption.php">Iteruption</a></li>
					<li><a href="./Contrat/saisiContrat.php">Contrat</a></li>
				  
				  </ul>
			  </li>
			   <li class="menu-p">
					<a href="#">Pieces</a>
					<ul class="submenu"> 
				  
						<li><a href="./CarteIdentite/saisiCarteIdentite.php">CNI</a></li>
						<li><a href="./Permis/saisiPermis.php">Permis</a></li>
				  
					</ul>
			   
			   </li>
				<li class="menu-pu">
					<a href="./Punition/saisiPunition.php">Punition</a>
				</li>
				 <li class="menu-t">
					<a href="#">Titre</a>
					<ul class="submenu"> 
				  
						<li><a href="./Diplome/saisiDiplome.php">Diplome</a></li>
						<li><a href="./Decoration/saisiDecoration.php">Decoration</a></li>
						
						<li><a href="./Secourisme/saisiSecourisme.php">Secourisme</a></li>
						<li><a href="./Categorie/saisiCategorie.php">Categorie</a></li>
						<li><a href="./Fonction/saisiFonction.php">Fonction</a></li>
					
					</ul>
				 </li>
				  
		 </ul>
		 </nav>

	
<?php
	session_start();
?>
<div id="droite" >
	<form action="listeCompagnie.php" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		<tr><td>EtatMajor:</td><td><input type="text" name="id" size="20px" /></td></tr>
		<tr><td>Localite</td><td><input type="text" name="nomVil" size="20px" /></td></tr>
		<tr><td>NomUnite</td><td>
				<select name="nomUnite">
						<option value="21 CIS">21 CIS</option>
						<option value="22 CIS">22 CIS</option>
						<option value="23 CIS">23 CIS</option>
						<option value="24 CIS">24 CIS</option>
				</select>
		</td></tr>
		<tr><td>Telephone</td><td><input type="text" name="tel"  size="20px" /></td></tr>
		<tr><td>Email</td><td><input type="text" name="mail"  size="20px" /></td></tr>
		<tr><td colspan="2"><input type="submit" name="valid" value="Valider" class="btn"></td></tr>
	</table>
</form></div>
<IMG SRC="./im/im9.jpg" id="comp">
<table>
<tr> 
	<a href="index.php" id="a1">Nouveau</a>&nbsp;&nbsp;
	<a href="./Localite/saisilocalite.php" id="a2">Localite</a>&nbsp;&nbsp;
	<a href="listeAgent21CIS.php" id="a2">21 CIS</a>&nbsp;&nbsp;
	<a href="listeAgent22cis.php" id="a3">22 CIS</a>&nbsp;&nbsp;
	<a href="listeAgent23cis.php" id="a4">23 CIS</a>&nbsp;&nbsp;
	<a href="listeAgent24cis.php" id="a5">24 CIS</a>&nbsp;&nbsp;
	
</tr>

</table>

	</div>
</body>
</html>		