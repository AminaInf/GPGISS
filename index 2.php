 <?php include('serveur1.php'); 
  //si l'utilisateur n'est connecter il ne peut pas acceder a cette page
  if(empty($_SESSION["username"])){
	  header('location: login.php');
  } 
  ?>
  
 <!DOCTYPE html>
 <html>
	 <head>
	 <title>Conexion</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
		<link rel="stylesheet" href="stilInd2.css">
		
	 </head>
		 <body>
		 <?php
	if(isset($_POST['suivant']))
	{
		header("location:saisiCentre.php");
		//$query=mysql_query("insert into agent (nomCentre) select nomCentre from centre where idCentre= LAST_INSERT_ID()");
	}
	else if(isset($_POST['svt']))
	{
		header("location:saicomp.php");
	}
?>
		
		 
		 <div id ="conteneur"> 
		 
		 <header>
		 <IMG SRC="./im/header.png" align=left  height=140px  id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
		 <nav>
			<label for="menu-mobile" class="menu-mobile">Menu</label>
			<input type="checkbox" id="menu-mobile" role="button">
		 <ul id ="menu">
			 <li class="menu-contr">
				<a href="#">Agent</a>
				
				<ul class="submenu"> 
				<li><a href="./liste/listeAgents.php">Les Agents</a></li> 
				  
						<li><a href="./Pesonne/saisiPesonne.php">Filiation</a></li>
						<li><a href="./CarteIdentite/saisiCarteIdentite.php">CNI</a></li>
						<li><a href="./Permis/saisiPermis.php">Permis</a></li>
									
					</ul>
				
			</li>
			 <li class="menu-contr">
				<a href="#">Contrat</a>
				  <ul class="submenu"> 
					<li><a href="./Contrat/saisiContrat.php">Nouveau Contrat</a></li>
					<li><a href="./Contrat/listeContrat.php">Les Contractuels</a></li>
					<li><a href="./Contrat/afficheContrat.php">Modifier</a></li>
					<li><a href="./Contrat/rechercheContrat.php">Rechercher</a></li>
				  
				  </ul>
			  </li>
			  <li class="menu-contr">
				<a href="#">Interuption</a>
				  <ul class="submenu"> 
				  
					<li><a href="./Interruption/saisiInterruption.php">Nouvelle Interuption</a></li>
					<li><a href="./Interruption/listeInterruption.php"> les interruptions</a></li>
					<li><a href="./Interruption/afficheInterruption.php" >Modifier</a></li>
					<li><a href="./Interruption/rechercheInterruption.php">Rechercher</a></li>
				  
				  </ul>
			  </li>
			   
			   <li class="menu-p">
					<a href="#">Punition</a>
					<ul class="submenu"> 
				  
						<li><a href="./Punition/saisiPunition.php">Nouvelle Punition</a></li>
						<li><a href="./Punition/affichePunition.php">Modifier </a></li>
					<li><a href="./Punition/listePunitions.php">liste des agents Punition</a></li>
					<li><a href="./Punition/recherchePunition.php">Recherche</a></li>
				  
					</ul>
			   
			   </li>
				
				 <li class="menu-t">
					<a href="#">Titre</a>
					<ul class="submenu"> 
						
						 
						<li>
						<a href="./Decoration/saisiDecoration.php">Decoration</a>
						</li>
						
						<li><a href="./Fonction/saisiFonction.php">Fonction</a></li>
						<li><a href="./Grade/saisiGrade.php">Grade</a></li>
						<li><a href="./Categorie/saisiCategorie.php">Categorie</a></li>
					
					</ul>
				 </li>
				 <li class="menu-t">
					<a href="#">Diplome</a>
					<ul class="submenu"> 
				  
						<li><a href="./Diplome/saisiDiplome.php">Academique et Militaire</a></li>
						<li><a href="./Secourisme/saisiDipSecou.php">Secourisme</a></li>
						
					
					</ul>
				 </li>
				 <li class="menu-t">
					<a href="#">Rapport</a>
					<ul class="submenu"> 
				  
						<li><a href="./EnvoiRapport/envoyerRapport.php"> Envoie Rapport</a></li>
						<li><a href="./EnvoiRapport/listeAgents.php">Recevoir rapport</a></li>
						
					
					</ul>
				</li>
				 <li class="menu-t">
					<a href="codesecretMutation.php">Mutation</a>
				 </li> 
				 <li class="menu-t"><a href="./Mutuel/saisiMutuel.php">Mutuel</a></li>
		 </ul>
		 </nav>
		 <div class ="defil">
		 <marquee direction="right" scrollamount="15"  id="id1"><span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">
		 <IMG SRC="./im/fond5.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im2.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im3.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im4.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im1.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im10.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im12.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im8.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im7.jpg"  width=300px height=150px >
		 <IMG SRC="./im/im6.jpg"  width=300px height=150px >
			</span></marquee>
		 </div>
		 <!-- <div class ="fond">
		 <IMG SRC="./im/fon13.jpg" align=right width=850px height=650px>-->

		 	 <p id="bv"> Si vous voulez enregistrer un agent veuillez renseigner les champs</p>
		 
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<IMG SRC="./im/footer.png" id="ft">
		
			<marquee><p id="pf">Realisé par Les Etudiantes AMIE DIOUF et ALIMATOU SOW </p></marquee>
		 </div>
		 
		 </body>
 </html>