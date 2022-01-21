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
<p id= "pt">
	
		Veuillez renseigner les champs svp</p>
	<div id="droite">
 
	<P class="pt">GRADE</P>
	<form action="" method="POST">
		
	<table border="0" cellpadding="10px" >
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
		 <tr><td colspan="2"><input type="submit" name="Enregistre" value="Enregistrer" class="btn"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistre']))
	
	{
		//$idGrade=$_POST['idGrade'];
		$type=$_POST['type'];
				/*if(empty($_POST['idGrade']) || empty($_POST['type']))
				{
					header('location:VerifGrade.php?vide=veuillez remplir tous les champs&idGrade='.$idGrade.'&type='.$type);
					exit();
				}*/
	
				$result=mysql_query("insert into grade (idGrade,type) values ('','".$type."')");
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
<table>
	<tr>
		<a href="saisiDecoration.php" id="a3">Nouveau</a>&nbsp;&nbsp;
		<a href="listeGrade.php" id="a4">ListeGrade</a>&nbsp;&nbsp;
	</tr>
</table>
</div>
<table>
	<tr>
		<a href="saisiGrade.php">Nouveau</a>&nbsp;&nbsp;
		<a href="listeGrade.php">ListeGrade</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>
