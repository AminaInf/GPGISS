<html>
	<head>
	<title>Centre</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="./Centre/cssComp.css">

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
				  
					<li><a href="./Interruption/saisiInterruption.php">Interuption</a></li>
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
					<a href="../Punition/saisiPunition.php">Punition</a>
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
	echo "<script language='Javascript'>
		var stripped = document.EnvoiSMS.telephone.value.replace(/[^\+|06+[0-9] ]/);   
        if(document.formulaire.telephone.value == '')
        {
                document.getElementById('texte').innerHTML = ' Veuillez remplir le champ obligatoire! ';
                return false;   
        }
       
        //test si le numéro saisi est une chaine de caractere
        else if(isNaN(parseInt(stripped)))
        {
            document.getElementById('texte').innerHTML = 'Veuillez saisir un numéro de téléphone valide!';
            return false;
        }
       
        else if (!(stripped.length == 10))
        {
            document.getElementById('texte').innerHTML = 'Vous venez de dépasser la longueur requise!';
            return false;
        } 
		var num_a_verifier = document.EnvoiSMS.telephone.value;
		var regex = new RegExp(/^(06)[0-9]{8}/gi);
		if(!regex.test(num_a_verifier)){
			alert('Numero de téléphone incorrect !');
			return false;
		} 
	</script>";
?>
<div id="droite" >
<form action="listeCentre.php" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="left">
		 <tr><td>Localite:</td><td><input type="text" name="nomVil" size="20px" /></td></tr>
		 <tr><td>NomCentre</td><td>
				<select name="nomCentre">
						<option value="CSIS Tivaouane">CSIS Tivaouane</option>
						<option value="CSIS Mekhe">CSIS Mekhe</option>
						<option value="CSIS Khombole">CSIS Khombole</option>
						<option value="CSIS Saly">CSIS Saly</option>
						<option value="CSIS Bambey">CSIS Bambey</option>
				</select>
			</td></tr>
		 <tr><td>Telephone</td><td><input type="text" name="telephone"  size="20px" pattern = "[0-9]{9}"/></td></tr>
		 <tr><td>Email</td><td><input type="email" name="email" size="20px" /></td></tr>
		<tr><td colspan="2"><input type="submit" name="enreg" value="Enregistrer" class="btn"></td></tr>
	</table>
</form>
</div>

<IMG SRC="./im/im9.jpg" id="comp">
<!--
<table>
<tr> 
	
	<a href="index.php" id="a1">Nouveau</a>&nbsp;&nbsp;
	<a href="./Localite/saisilocalite.php" id="a2">Localite</a>&nbsp;&nbsp;
	<a href="listePISBambey.php" id="a2">CSIS Bambey</a>&nbsp;&nbsp;
	<a href="listePISKhombole.php" id="a3">CSIS Khombole</a>&nbsp;&nbsp;
	<a href="listePISMekhe.php" id="a4">CSIS Mekhe</a>&nbsp;&nbsp;
	<a href="listePISSaly.php" id="a5">CSIS Saly</a>&nbsp;&nbsp;
	<a href="listePISTivaouane.php" id="a6">CSIS Tivaouane</a>&nbsp;&nbsp;
</tr>

</table>
--> 
</div>
</body>
</html>