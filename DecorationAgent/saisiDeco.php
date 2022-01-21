<html>
<head>
<link rel="stylesheet" type="text/css" href="styleDeco.css">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>
<body>
<?php
session_start();
?>
<form action="listeDecoAgent.php" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>IdDecoration:</td><td><input type="number" name="idDeco" min='1' size="35px" /></td></tr>
		 <tr><td>IdPersonne:</td><td><input type="number" name="idPersonne" size="20px" min='1' /></td></tr>
		 <tr><td>Matricule:</td><td><input type="number" name="matricule" size="20px" min='1' /></td></tr>
		 <tr><td>AnneeDecoration:</td><td><input type="date" name="anneeDeco" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
	</table>
</form>
</body>
</html>
