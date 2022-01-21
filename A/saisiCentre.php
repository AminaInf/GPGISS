<html>
<head>
</head>
<body>
<?php
	session_start();
?>
<br/><br/><br/><br/>
<form action="" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="left">
		<legend align="right">Centre</legend>
		 <tr><td>Localite:</td><td><input type="text" name="nomVil" size="20px" /></td></tr>
		 <tr><td>EtatMajor:</td><td><input type="number" name="id" size="20px" /></td></tr>
		 <tr><td>NomCentre</td><td><input type="text" name="nomCentre"  size="20px" /></td></tr>
		 <tr><td>Telephone</td><td><input type="text" name="telephone"  size="20px" /></td></tr>
		 <tr><td>Email</td><td><input type="email" name="email" size="20px" /></td></tr>
	</table>
	<table border="0" width="500px" cellpadding="10px" align="center">
		<tr><td>Loaclite</td><td><input type="text" name="nomVil" size="20px" /></td></tr>
		<tr><td>EtatMajor:</td><td><input type="text" name="id" size="20px" /></td></tr>
		<tr><td>NomUnite</td><td><input type="text" name="nomUnite" size="20px" /></td></tr>
		<tr><td>Telephone</td><td><input type="text" name="tel"  size="20px" /></td></tr>
		<tr><td>Email</td><td><input type="text" name="mail"  size="20px" /></td></tr>
	</table>
	<tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
</form>
<?php
	include('connexion.php');
	if(isset($_POST['Enregistrer']))
	{
		//insertion dans centre
		//$idCentre=$_POST['idCentre'];
		$nomVil=$_POST['nomVil'];
		$id=$_POST['id'];
		$nomCentre=$_POST['nomCentre'];
		$telephone=$_POST['telephone'];
		$email=$_POST['email'];
		$result=mysql_query("insert into centre (idCentre,nomVil,id,nomCentre,telephone,email) values ('','".$nomVil."','".$id."','".$nomCentre."','".$telephone."','".$email."')");
		
		//insertion dans compagnie
		$nomVil=$_POST['nomVil'];
		$id=$_POST['id'];
		$nomUnite=$_POST['nomUnite'];
		$tel=$_POST['tel'];
		$mail=$_POST['mail'];
		$resultat=mysql_query("insert into compagnie (idCompagnie,nomVil,id,nomUnite,tel,mail) values('','".$nomVil."','".$id."','".$nomUnite."','".$tel."','".$mail."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectue</p></font>";
		}
		else if($resultat)
		{																																																																																																																																																																					
			echo "<font color='red' size='10'><p align='center'>Insertion reussie</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Erreur verifiez votre insertion</p></font>";
		}
	}
?>
<table>
<tr> 
	
	<a href="saisiCentre.php">Nouveau</a>&nbsp;&nbsp;
	<a href="listeCentre.php">Les Centres</a>&nbsp;&nbsp;
	<a href="saisi.php">Retour</a>&nbsp;&nbsp;
</tr>
</table>
</body>
</html>