 <html>
	<head>
		<title>CNI</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			<link rel="stylesheet" href="cssCI.css">
	</head>
<body>
<?php
session_start();
?>
	
	<div id ="conteneur">
	
	<header>
		 <IMG SRC="../im/header.png"  width=1000px height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
	
	
		 </nav>

	
	<br/><br/>

<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>NumeroCNI:</td><td><input type="text" name="numeroCNI"  size="35px" /></td></tr>
		 <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="35px" /></td></tr>
		 <tr><td>DateDeliverance:</td><td><input type="date" name="dateDeliverance"  size="30px" /></td></tr>
		 <tr><td>DateExpiration:</td><td><input type="date" name="dateExpiration"  size="30px" /></td></tr>
		
		 <tr><td><input type="submit" name="Enregistrer" value="Enregistrer" id="btn"></td></tr>
		 
	</table>
</form>

<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	{
		$numeroCNI=$_POST['numeroCNI'];
		$idAgent=$_POST['idAgent'];
		$dateDeliverance=$_POST['dateDeliverance'];
		$dateExpiration=$_POST['dateExpiration'];
		
		
		$result=mysql_query("insert into cartedidentite (numeroCNI,idAgent,dateDeliverance,dateExpiration) values
				('".$numeroCNI."','".$idAgent."','".$dateDeliverance."','".$dateExpiration."')");
		if($result)
		{
			echo "<font color='green' size='4'><p align='center'>Insertion bien effectue</p></font>";
		}
		else
		{
			echo "<font color='red' size='4'><p align='center'>Echec insertion</p></font>";
		}
	}

?>
<table id="taba">
	<tr>
		<a href="saisiCarteIdentite.php" class="a1">Nouveau</a></td></tr>&nbsp;&nbsp;
		<a href="listeCarteIdentite.php" class="a2">CNI</a>&nbsp;&nbsp;
	</tr>
</table>
	</div>
</body>
</html>
