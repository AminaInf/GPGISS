<html>
	<head>
	<title>Contrat</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="cssCont.css"/>
	</head>
<body>

		
	<div id="conteneur">
	<header>
		  <IMG SRC="../im/header.png"  width=1100px height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
	
		<br/>
	
		 <p id="bv">
		Veuillez svp remplir le formulaire</p>
		<br/>
 
	<IMG SRC="../im/cont.jpg" align=left  id="cont">
<?php
session_start();
?>

<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center" class="tab">
		 <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" /></td></tr>
		 <tr><td>DebutContrat:</td><td><input type="date" name="debutContrat" size="20px" /></td></tr>
		 <tr><td>FinContrat:</td><td><input type="date" name="finContrat" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn"></td></tr>
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	{
		
		//$idContrat=$_POST['idContrat'];
		$idAgent=$_POST['idAgent'];
		$debutContrat=$_POST['debutContrat'];
		$finContrat=$_POST['finContrat'];
		
		$result=mysql_query("insert into contrat (idContrat,idAgent,debutContrat,finContrat) values ('','".$idAgent."','".$debutContrat."','".$finContrat."')");
		if($result)
		{
			echo "<font color='green' size='2'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='1'><p align='center'>Echec insertion</p></font>";
		}
	}

?>

<br/>
<!--
<table>
	<tr><div id="a1">
		<a href="saisiContrat.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="listeContrat.php" id="a2">Les Contractuels</a>&nbsp;&nbsp;
		</div>
	</tr>
</table>
-->


<IMG SRC="../im/footer.png" id="ft">
</div>
</body>
</html>
