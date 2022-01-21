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
		<link rel="stylesheet" href="stilInd.css">
		
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
				  
						<li><a href="./EnvoiRapport/envoyerRapport.php"> Envoier Rapport</a></li>
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
		 
<br/>
<form action="" method="POST">

	<table border="0"   >
		<table border="0" cellpadding="10px" align="left" class="tab">
		 <tr><td>Matricule:</td><td><input type="text" name="matricule" size="20px" required/></td></tr>
			<tr><td>Grade:</td><td>
				<select name="idGrade">
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
			<tr><td>NumeroCNI:</td><td><input type="text" name="numeroCNI" size="20px" required/></td></tr>
			<tr><td>NumeroMutuel:</td><td><input type="number" name="numeroMutuel" min='1000' size="20px" required/></td></tr>
			<tr><td>GroupeSanguin:</td><td>
				<select name="grpeSanguin">
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
			<tr><td>NumeroPermis:</td><td><input type="number" name="numeroPermis" size="20px" required/></td></tr>
			<tr><td>Specialité:</td><td>
				<select name="specialite">
						<option value="Service General">Service General</option>
						<option value="Intendance">Intendance</option>
						<option value="Transmissions">Transmissions</option>
						<option value="Genie">Genie</option>
						<option value="Materiels">Materiels</option>
						<option value="Marine">Marine</option>
						<option value="Musique">Musique</option>
						<option value="Sante">Sante</option>
						<option value="GREP">GREP</option>
						<option value="EPS">EPS</option>
				</select>
			<tr><td>NumeroCIM:</td><td><input type="number" name="numeroCim" size="20px" /></td></tr>
			<tr><td>Aptitude:</td><td>
				<select name="aptitude">
						<option value="apte">apte</option>
						<option value="en emploi sedentaire">en emploi sedentaire</option>
				</select>
			</td></tr>
			<tr><td>Numero:</td><td><input type="number" name="numero" min='1' max='10000' size="20px" /></td></tr>
			<tr><td>Echelon:</td><td><input type="number" name="echelon" min='1' max='12' size="20px" /></td></tr>
		 </table>
		<table border="0"  cellpadding="10px" align="center" class="tab2">
		 <tr><td>Prénom:</td><td><input type="text" name="prenom" size="20px" required/></td></tr>
			<tr><td>Nom:</td><td><input type="text" name="nom" size="20px" required/></td></tr>
			<tr><td>DateNaiss:</td><td><input type="date" name="dateNaiss" size="20px" /></td></tr>
			<tr><td>LieuNaiss:</td><td><input type="text" name="lieuNaiss" size="20px" /></td></tr>
			<tr><td>CCPA:</td><td><input type="text" name="ccpa" size="20px" /></td></tr>
			<tr><td>DateIncorporation:</td><td><input type="date" name="datteIncorporation" size="20px" /></td></tr>
			<tr><td>LimiteAge:</td><td><input type="date" name="limiteAge" size="20px" required/></td></tr>
			 <tr><td>Prevention:</td><td>
				<select name="prevention">
						<option value="PV1">PV1</option>
						<option value="PV2">PV2</option>
						<option value="PV3">PV3</option>
				</select>
			</td></tr>
			<tr><td>Echelle:</td><td><input type="number" name="echelle" min='1' max='4' size="20px" /></td></tr>
			</table>
		 <div id="t">
		 <table align="bottom">
		<td><input type="submit" name="suivant" value="Vers Centre" class="btn"/></td>&nbsp;&nbsp;
		
		<td><input type="submit" name="svt" value="Vers Compagnie"class="btn"/></td>
		<td><a href="index.php" id="anu">Annuler</a></td>
		
		</table></div>
		
	</table>
	
</form>

<?php
include('connexion.php');
	if(isset($_POST['suivant']))
	
	{
		 $matricule=$_POST['matricule'];
		 $grade=$_POST['idGrade'];
		 $requete="select idGrade from grade where type='".$grade."'";
		 $result= mysql_query($requete) or die('Erreur SQL !'.$requete.'<br>'.mysql_error());
			if ($result_grade = mysql_fetch_array($result))
			$idGrade = $result_grade['idGrade'];
		$numeroCNI=$_POST['numeroCNI'];
		$numeroMutuel=$_POST['numeroMutuel'];
		$numeroPermis=$_POST['numeroPermis'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$dateNaiss=$_POST['dateNaiss'];
		$lieuNaiss=$_POST['lieuNaiss'];
		$ccpa=$_POST['ccpa'];
		$datteIncorporation=$_POST['datteIncorporation'];
		$limiteAge=$_POST['limiteAge'];
		$prevention=$_POST['prevention'];
		$specialite=$_POST['specialite'];
		$numeroCim=$_POST['numeroCim'];
		$aptitude=$_POST['aptitude'];
		$numero=$_POST['numero'];
		$echelon=$_POST['echelon'];
		$echelle=$_POST['echelle'];
		$grpeSanguin=$_POST['grpeSanguin'];
		
				
			 $query=mysql_query("insert into agent(idAgent,matricule,idGrade,numeroCNI,numeroMutuel,numeroPermis,prenom,nom,dateNaiss,lieuNaiss,ccpa,datteIncorporation,limiteAge,
		 prevention,specialite,numeroCim,aptitude,numero,echelon,echelle,grpeSanguin) values('','".$matricule."','".$idGrade."','".$numeroCNI."','".$numeroMutuel."',
		 '".$numeroPermis."','".$prenom."','".$nom."','".$dateNaiss."','".$lieuNaiss."','".$ccpa."','".$datteIncorporation."','".$limiteAge."',
		 '".$prevention."','".$specialite."','".$numeroCim."','".$aptitude."','".$numero."','".$echelon."','".$echelle."','".$grpeSanguin."')");
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
 include('connexion.php');
 if(isset($_POST['svt']))
	 {
		 $matricule=$_POST['matricule'];
		 $grade=$_POST['idGrade'];
		 $requete="select idGrade from grade where type='".$grade."'";
		 $result= mysql_query($requete) or die('Erreur SQL !'.$requete.'<br>'.mysql_error());
			if ($result_grade = mysql_fetch_array($result))
			$idGrade = $result_grade['idGrade'];
		 $numeroCNI=$_POST['numeroCNI'];
		 $numeroMutuel=$_POST['numeroMutuel'];
		 $numeroPermis=$_POST['numeroPermis'];
		 $nom=$_POST['nom'];
		 $prenom=$_POST['prenom'];
		 $dateNaiss=$_POST['dateNaiss'];
		 $lieuNaiss=$_POST['lieuNaiss'];
		 $ccpa=$_POST['ccpa'];
		 $datteIncorporation=$_POST['datteIncorporation'];
		 $limiteAge=$_POST['limiteAge'];
		 $prevention=$_POST['prevention'];
		 $specialite=$_POST['specialite'];
		 $numeroCim=$_POST['numeroCim'];
		 $aptitude=$_POST['aptitude'];
		 $numero=$_POST['numero'];
		 $echelon=$_POST['echelon'];
		 $echelle=$_POST['echelle'];
		 $grpeSanguin=$_POST['grpeSanguin'];
		 
		 $query=mysql_query("insert into agentcomp(idAgent,matricule,idGrade,numeroCNI,numeroMutuel,numeroPermis,nom,prenom,dateNaiss,lieuNaiss,ccpa,datteIncorporation,prevention,limiteAge,specialite,numeroCim,aptitude,numero,echelon,echelle,grpeSanguin) values('','".$matricule."','".$idGrade."','".$numeroCNI."','".$numeroMutuel."',
		 '".$numeroPermis."','".$nom."','".$prenom."','".$dateNaiss."','".$lieuNaiss."','".$ccpa."','".$datteIncorporation."','".$limiteAge."','".$prevention."',
		 '".$specialite."','".$numeroCim."','".$aptitude."','".$numero."','".$echelon."','".$echelle."','".$grpeSanguin."')");
		 if($query)
		 {
			 echo "<font color='green' size='10'><p align='center'>Insertion reussie</p></font>";
		 }
		 else 
		 {
			echo "<font color='green' size='10'><p align='center'>Erreur insertion</p></font>";
		 }
		 
	 }
?>
<br/>


<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
		<IMG SRC="./im/footer.png" id="ft">
		
			<marquee><p id="pf">Realisé par Les Etudiantes AMIE DIOUF et ALIMATOU SOW </p></marquee>
		 </div>
		 
		 </body>
 </html>