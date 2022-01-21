<?php
/* 
 if(!isset($_SESSION['login']))
 	{
 		header("location:authentification.php?auth=Veuillez vous authentifier");
		exit();
  	}*/

?>
<html>
<head>
</head>
<body>
<form method='POST' action='listeDipSecou.php'>
	<table border='0' width="500px" cellpadding="10px" align="center">
	<br/><br/><br/>
	<tr><td>IdSecourisme:</td><td><input type='number' name='idSecou' value="<?php if(isset($_GET['idSecou'])) {echo $_GET['idSecou'];} else {echo '';} ?>"/></td></tr>
	<tr><td>TypeSecourisme:</td><td><input type='text' name='typeSecou' value="<?php if(isset($_GET['typeSecou'])) {echo $_GET['typeSecou'];} else {echo '';} ?>"/></td></tr>
	<tr><td><input type='submit' name='Enregistrer' value='Enregistrer'></td><br></tr>
	</table>
</form>
<?php
	session_start();
	//recuperation des messages d'erreur
	if(isset($_GET['vide']))
	{
		echo "<font color='red' size='5'>".$_GET['vide']."</font color>";
	}
	
?>
</body>
</html>