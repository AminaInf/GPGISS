<html>
<head> 	
	<title>Decoration</title>
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
	
	<div id="gauche">
	
	<IMG SRC="../im/deco.jpg"  width=400px height=450px align="center" id="deco">
</div>
						<ul><li><a href="saisiGrade.php" id="ao">Nouveau</a></li>
						<li><a href="listeGrade.php" id="al">ListeGrade</a></li>
						<li><a href="rechercheGrade.php" id="ar">Rechercher</a></li>
						<li><a href="afficheGrade.php" id="am">Modifier</a></li>
						<!--<li><a href="saisiDipSecou.php" id="anu">Annuler</a></li>-->
						</ul>
<p id= "pt">
	
		Veuillez renseigner les champs svp</p>
	<div id="droite">
 
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
	    <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" /></td></tr>
		 <tr><td>Type:</td><td>
			<select name="type">
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
		<tr><td>Date Nomination:</td><td><input type="date" name="dateNomination" size="20px" /></td></tr>
		<tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn"></td> </tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$idAgent=$_POST['idAgent'];
		$type=$_POST['type'];
		$dateNomination=$_POST['dateNomination'];
				
		$result=mysql_query("insert into grade (idGrade,idAgent,type,dateNomination) values ('','".$idAgent."','".$type."','".$dateNomination."')");
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
</div>
	
	
	
	<!--<table>
	<tr>
		<a href="saisiDecoration.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="listeDecoAgent.php" id="a2">listeDecoration</a>&nbsp;&nbsp;
	</tr>
	
</table>-->
	
	<IMG SRC="../im/footer.png" id="ft">
	
	</div>
</body>
</html>
