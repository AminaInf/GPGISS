<html>
<head> 	
	<title>Punition</title>
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
	
<h1>
	
		Veuillez renseigner les champs svp</h1> 
	
	<div >

<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
	     <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" /></td></tr>
		 <tr><td>Nature:</td><td><input type="text" name="nature" size="20px" /></td></tr>
		 <tr><td>Duree:</td><td><input type="text" name="duree" size="20px" /></td></tr>
		 <tr><td>Date Punition:</td><td><input type="date" name="datePunition" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn">  </tr>
		
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		$idAgent=$_POST['idAgent'];
		$nature=$_POST['nature'];
		$duree=$_POST['duree'];
		$datePunition=$_POST['datePunition'];
			$result=mysql_query("insert into punition (idPunition,idAgent,nature,duree,datePunition) values('','".$idAgent."','".$nature."','".$duree."','".$datePunition."')");
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
<br/>

</div>
</div>
</body>
</html>