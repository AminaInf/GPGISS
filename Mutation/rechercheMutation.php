<?php
session_start();
/*
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Moteur de Recherche</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include ('fonctionMutation.php');
	?>
<br/><br/><br/><br/>
	<form method="POST">
	<input type="text" name="search" placehorder="Votre cle de recherche..">
	<input type="submit" name="submit" value="Rechercher">
	</form>
	<?php
		if(isset($_POST['submit']))
		{
			$search=mysql_real_escape_string(htmlspecialchars(trim($_POST['search'])));  
				if(empty($search))
				{
					echo "<span class='erreur'>Veuillez remplir ce champs </span>";
				}
				else
				{
					results($search);
				}
		}
	?>
</body>
</html>
