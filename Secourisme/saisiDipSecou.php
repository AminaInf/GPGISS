<html>
<head>
		<title>Fonction</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" href="styleDeco.css"/>

	</head>
<body>
	<div id ="conteneur">
	<header>
		  <IMG SRC="../im/header.png"   height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->
						<ul><li><a href="./Secourisme/saisiDipSecou.php" id="ao">Secourisme</a></li>
						<li><a href="./Secourisme/listeDipSecou.php" id="al">Diplome Secourisme</a></li>
						<li><a href="./Secourisme/rechercheDipSecou.php" id="ar">Rechercher</a></li>
						<li><a href="./Secourisme/afficheDipSecou.php" id="am">Modifier</a></li>
						<!--<li><a href="saisiDipSecou.php" id="anu">Annuler</a></li> -->
						</ul>
<h1>
	
		Veuillez renseigner les champs svp</h1> 

<?php
session_start();
?>

<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
	     <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" /></td></tr>
		<tr><td>Type Secourisme:</td><td><input type="text" name="typeSecou" size="20px" /></td></tr>
		<tr><td>Date Secourisme:</td><td><input type="date" name="dateSecourisme" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class=" btn"></td> </tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$idAgent=$_POST['idAgent'];
		$typeSecou=$_POST['typeSecou'];
		$dateSecourisme=$_POST['dateSecourisme'];
		$result=mysql_query("insert into diplomesecourisme (idSecou,typeSecou,dateSecourisme,idAgent) values ('','".$typeSecou."','".$dateSecourisme."','".$idAgent."')");
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
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
<br/>
<!--
<table>
	<tr>
		<a href="saisiDipSecou.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeDipSecou.php">Diplome Secourisme</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</div>
</body>
</html>
