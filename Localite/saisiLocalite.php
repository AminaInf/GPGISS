<html>
<head> 	
	<title>localite</title>
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
<br/><br/><br/><br/>
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>NomVille:</td><td><input type="text" name="nomVil" size="20px" /></td></tr>
                 <tr><td>Population:</td><td><input type="text" name="population" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn"></td></tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	
	{
		//$idVil=$_POST['idVil'];
		$nomVil=$_POST['nomVil'];
                $population=$_POST['population'];	
		
		
				
				$result=mysql_query("insert into localite (nomVil,population) values ('".$nomVil."','".$population."')");
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
		<a href="saisiLocalite.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="ListeLocalite.php" id="a1">Localite</a>&nbsp;&nbsp;
	</tr>
</table>
</div>
</body>
</html>
