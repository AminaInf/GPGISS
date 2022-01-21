<html>
	<head>
	<title>mutation</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="code.css"/>
	</head>
<body>
<div id ="conteneur"> 

<br/><br/>
<h1>Veuillez entrer le mot de passe pour pouvoir effectuer une mutation:</h1><br>
<form action="" method="post">
Mot de Passe : <input type="password" name="mdp" />
<input type="submit" name="envoi" value="Valider" />
</form>
<IMG SRC="./im/login.jpg" align="right" width=255px id="cont">
<?php
  include('connexion.php');
	/*if(isset($erreur))
		{
			echo $erreur;
		}*/
?>
<?php 
$motdepasse='muter';
	if(isset($_POST['envoi']))
	{
		if(isset($_POST['mdp']) and !empty($_POST['mdp']))
		{
			if($_POST['mdp'] == $motdepasse) 
				{
					$acceder = 1;
				}else
				{
					echo "<font color='red' size='5'><p align='center'>Mot de passe errone</p></font>";
				}
		}else
			{
			   echo "<font color='red' size='5'><p align='center'>Attention vous devez remplir cette case</p></font>";
			}
	}
	
if (!isset($acceder)) {?>


<?php } else { 
	  $access = 'Vous etes connecte:';
	header('location:mutation.php');
?>
<?php } ?>
</div> 
</body>
</html>