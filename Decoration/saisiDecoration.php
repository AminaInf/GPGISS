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
<br/>
	<div id ="conteneur">
	
	<header>
		  <IMG SRC="../im/header.png"   height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
	
	<div id="gauche">
	
	<IMG SRC="../im/deco.jpg"  width=400px height=450px align="center" id="deco">
</div>
						
						<ul ><li><a href="saisiDecoration.php" id="ao">Nouvelle</a></li>
						<li><a href="listeDecoration.php" id="al">Liste des agents decoré</a></li>
						<li><a href="rechercheDecoration.php"id="ar">Recherche</a></li>
						<li><a href="afficheDecoration.php" id="am">Modifier</a></li></ul>
<p id= "pt">
	
		Veuillez renseigner les champs svp</p>
	<div id="droite">
	<br/>
	<form action="" method="POST">
	<table border="0"  cellpadding="10px" align="center">
		<tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px"/></td></tr>
		<tr><td>Type Decoration:</td><td>
			<select name="typeDeco">
				<option value="MEDAILLE DHONNEUR SP">MEDAILLE D'HONNEUR  SP</option>
				<option value="MEDAILLE MILITAIRE">MEDAILLE MILITAIRE</option>
				<option value="CHEVALIER ORDRE DU MERITE">CHEVALIER ORDRE DU MERITE</option>
				<option value="OFFICIER ORDRE DU MERITE">OFFICIER ORDRE DU MERITE</option>
				<option value="COMMANDEUR ORDRE DU MERITE">COMMANDEUR ORDRE DU MERITE</option>
				<option value="CHEVALIER ORDRE NATIONAL DU LION">CHEVALIER ORDRE NATIONAL DU LION</option> 
				<option value="OFFICIER ORDRE NATIONAL DU LION">OFFICIER ORDRE NATIONAL DU LION</option>
				<option value="COMMANDEUR ORDRE NATIONAL DU LION">COMMANDEUR ORDRE NATIONAL DU LION</option>
			</select>
		</td></tr>
		<tr><td>AnneeDecoration:</td><td><input type="date" name="anneeDeco" size="20px" /></td></tr>
		<tr><td colspan="2"><input type="submit" name="valide" value="Enregistrer" class="btn"></td></tr>
	</table>
</form>

<?php
include('connexion.php');
	if(isset($_POST['valide']))
	{
		//recuperation
		
		$idAgent=$_POST['idAgent'];
		$typeDeco=$_POST['typeDeco'];
		$anneeDeco=$_POST['anneeDeco'];
		
		$result=mysql_query("insert into decoration (idDeco,idAgent,typeDeco,anneeDeco) values ('','".$idAgent."','".$typeDeco."','".$anneeDeco."')");
		if($result)
		{
			echo "<font color='white' size='2'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='white' size='2'><p align='center'>Echec insertion</p></font>";
		}
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
