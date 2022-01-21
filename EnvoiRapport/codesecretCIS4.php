<html>
	<head>
	<title>rapport</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="code.css"/>
	</head>
<body>
<div id ="conteneur"> 
<?php 
$motdepasse='cis4';
	if(isset($_POST['envoi']))
	{
		if(isset($_POST['mdp']) and !empty($_POST['mdp']))
		{
			if($_POST['mdp'] == $motdepasse) 
				{
					$acceder = 1;
				}else
				{
					$erreur = 'Attention:le mot de passe est errone';
				}
		}else
			{
			   $erreur = 'Attention vous devez remplir la case mot de passe';
			}
	}
	
if (!isset($acceder)) {?>
<h1 align="center" >Veuillez entrer le mot de passe pour voir les rapports recus:</h1>
<?php

	if(isset($erreur))
		{
			echo $erreur;
		}
?>
<form action="" method="post">
Mot de Passe : <input type="password" name="mdp" />
<input type="submit" name="envoi" value="Valider" />
</form>
<IMG SRC="../im/login.jpg" align="right" width=255px id="cont">
<?php } else { 
	  $access = 'Vous etes connecte:';
	header('location:listeRapportCIS4.php');
?>
<?php } ?>
</div> 
</body>
</html>