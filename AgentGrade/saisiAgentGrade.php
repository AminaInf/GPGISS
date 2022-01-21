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
<?php
session_start();
?>
<br/><br/><br/><br/>
<form action="listeAgentGrade.php" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="center">
		 <tr><td>IdPersonne:</td><td><input type="number" name="idPersonne" min ='1' size="35px" /></td></tr>
		 <tr><td>Matricule:</td><td><input type="number" name="matricule" min ='1' size="35px" /></td></tr>
		 <tr><td>IdInterruption:</td><td><input type="number" name="idInt" min='1' size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregistrer" value="Enregistrer"></td></tr>
	</table>
</form>
</body>
</html>