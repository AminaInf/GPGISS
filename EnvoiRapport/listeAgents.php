<br>
<html>
	<head>
	<title>Agent</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="styleDeco.css"/>
	</head>
<body>
<h1 align="center"> Veuillez cliquer sur l'un des liens pour voir les rapports au niveau de chaque compagnie ou centre </h1>
		
	<div id="conteneur">
<?php
	include('connexion.php');
	
	
?>


<div >

<table id="tab">

	<tr>
		<div id="gauche">
		<h2>Compagnie</h2>
		<a href="codesecretCIS1.php">21 CIS</a>&nbsp;&nbsp;
		<br><br>
		<a href="codesecretCIS2.php">22 CIS</a>&nbsp;&nbsp;
		<br><br>
		<a href="codesecretCIS3.php">23 CIS</a>&nbsp;&nbsp;
		<br><br>
		<a href="codesecretCIS4.php">24 CIS</a>&nbsp;&nbsp;
		<br><br>
		</div>
		<div id="droite">
		<h2>Centre</h2>
		<a href="codesecretSaly.php">CSIS Saly</a>&nbsp;&nbsp;
		<br><br>
		<a href="codesecretBambey.php">CSIS Bambey</a>&nbsp;&nbsp;
		<br><br>
		<a href="codesecretKhombole.php">CSIS Khombole</a>&nbsp;&nbsp;
		<br><br>
		<a href="codesecretMekhe.php">CSIS Mekhe</a>&nbsp;&nbsp;
		<br><br>
		<a href="codesecretTivaouane.php">CSIS Tivaouane</a>&nbsp;&nbsp;</div>
		
		
	</tr>
</table>
</div>
</div>
</body>
</html>