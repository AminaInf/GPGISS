<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>
<body>
<br/><br/><br/><br/>
<form method='POST' action='listeDiplome.php'>
	<table border='0'>
	<tr><td>NomDiplome</td><td>
		<select name='nomDip' value="<?php if(isset($_GET['nomDip'])) {echo $_GET['nomDip']; } else {echo '';} ?>"/>
				<option value="CFEE">CFEE</option>
				<option value="BFEM">BFEM</option>
				<option value="BAC">BAC</option>
				<option value="LICENCE">LICENCE</option>
				<option value="MASTER">MASTER</option>
				<option value="DOCTORAT">DOCTORAT</option>
			</select>
	</td></tr>
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