<html>
<head> 	
	<title>Mutuel</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleLocal.css">

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
	
<br/>
<ul><li><a href="saisiMutuel.php" id="ao">Nouveau</a></li>
						<li><a href="listeMutuel.php" id="al">Les Mutuels</a></li>
						<li><a href="rechercheMutuel.php" id="ar">Rechercher</a></li>
						<li><a href="afficheMutuel.php" id="am">Modifier</a></li>
						<!--<li><a href="saisiDipSecou.php" id="anu">Annuler</a></li>-->
						</ul><br/>
<p id= "pt">
	
		Veuillez renseigner les champs svp</p>
		<br/>
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>numeroMutuel:</td><td><input type="number" name="numeroMutuel" min='1' size="20px" /></td></tr>
		 <tr><td>DateCreation:</td><td><input type="date" name="dateCreation" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$numeroMutuel=$_POST['numeroMutuel'];
		$dateCreation=$_POST['dateCreation'];
		//$nombreParticipants=$_POST['nombreParticipants'];
				
				$result=mysql_query("insert into mutuel (numeroMutuel,dateCreation) values('".$numeroMutuel."','".$dateCreation."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
		$nombreParticipants=mysql_query("select numeroMutuel,dateCreation from mutuel");
		//echo mysql_num_rows($resultats)."participants";
		//$res=mysql_query("insert into mutuel (numeroMutuel,dateCreation,nombreParticipants) values (.'".$numeroMutuel."','".$dateCreation."','".$resultats."')");
	}

?>
<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
		/* 	<table>
	<tr>
		<a href="saisiMutuel.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="listeMutuel.php" id="a2">Membres</a>&nbsp;&nbsp;
	</tr>
</table> */
?>
<br/>

</div>
</body>
</html>
