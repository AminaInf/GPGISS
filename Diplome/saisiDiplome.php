<br/>
<html>
	<head> 	
	<title>Diplomes</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet"  href="styleDeco.css">

</head>
<body>
						<ul><li><a href="saisiDiplome.php" id="ao">Nouveau</a></li>
						<li><a href="listeDiplome.php" id="al">Les diplomés</a></li>
						<li><a href="afficheDiplome.php" id="am">Modifier</a></li>
						<li><a href="rechercheDiplome.php" id="ar">Rechercher</a></li><li></ul>	<br/>
<h1 class="pt" align="center">Veuillez choisir un ou plusieurs diplomes</h1>
<br/>
<?php
session_start();
?>	
	<div id ="conteneur">
	<div>
<form action="" method="POST">
<table border="0" width="500px" cellpadding="10px" align="center">
	    <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" id="input"/></td></tr>
		<tr><td>NomDiplome:</td><td>
				<input type="checkbox" name="nomDip[]" value="CFEE">CFEE
				<br>
				<input type="checkbox" name="nomDip[]" value="BFEM">BFEM
				<br>
				<input type="checkbox" name="nomDip[]" value="BAC">BAC
				<br>
				<input type="checkbox" name="nomDip[]" value="LICENCE">LICENCE
				<br>
				<input type="checkbox" name="nomDip[]" value="MASTER">MASTER
				<br>
				<input type="checkbox" name="nomDip[]" value="DOCTORAT">DOCTORAT
				<br>
				<input type="checkbox" name="nomDip[]" value="CASIS">CASIS
				<br>
				<input type="checkbox" name="nomDip[]" value="CAP1">CAP1
				<br>
				<input type="checkbox" name="nomDip[]" value="CAPT2">CAPT2
				<br>
				<input type="checkbox" name="nomDip[]" value="CAPT2+CIA">CAPT2+CIA
				<br>
				<input type="checkbox" name="nomDip[]" value="BS">BS
				<br>
				<input type="checkbox" name="nomDip[]" value="BT">BT
				<br>
				<input type="checkbox" name="nomDip[]" value="DAGO">DAGO
		</td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer" class="btn"></td></tr>
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregistrer']))
	{
		$idAgent=$_POST['idAgent'];
		$a = ($_POST['nomDip']) ;
				$nomDip = implode(',',$a) ;
				$result=mysql_query("insert into diplome (idDip, nomDip, idAgent) values ('', ' " .$nomDip. " ' ,  '".$idAgent."')");
					if($result)
					{
						echo "<font color='green' size='2'><p align='center'>Insertion bien effectuee</p></font>";
					}
					else
					{
						echo "<font color='red' size='2'><p align='center'>Echec insertion</p></font>";
						
					}
	}
	/* <table>
	<tr>
		<a href="saisiDiplome.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="listeDiplome.php" id="a2">Les Diplomes</a>&nbsp;&nbsp;
		
	</tr>
</table> */

?>
<br/>
</div>
</div>
</body>
</html>
