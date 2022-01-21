<br>
<html>
	<head>
	<title>Agent</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="mutation.css"/>
	</head>
<body>
<h1 align="center"> Veuillez cliquer sur l'un des liens pour voir les agents au niveau de chaque compagnie ou centre </h1>
		
	<div id="conteneur">
<?php
	include('connexion.php');
	
	
?>
<br>

<div >

<table id="tab">

	<tr>
		<div id="g">
		<h2>Compagnie</h2>
		<a href="listeAgent21cis.php">21 CIS</a>&nbsp;&nbsp;
		<br><br>
		<a href="listeAgent22cis.php">22 CIS</a>&nbsp;&nbsp;
		<br><br>
		<a href="listeAgent23cis.php">23 CIS</a>&nbsp;&nbsp;
		<br><br>
		<a href="listeAgent24cis.php">24 CIS</a>&nbsp;&nbsp;
		<br><br>
		</div>
		<div id="d">
		<h2>Centre</h2>
		<a href="listePISSaly.php">CSIS Saly</a>&nbsp;&nbsp;
		<br><br>
		<a href="listePISBambey.php">CSIS Bambey</a>&nbsp;&nbsp;
		<br><br>
		<a href="listePISKhombole.php">CSIS Khombole</a>&nbsp;&nbsp;
		<br><br>
		<a href="listePISMekhe.php">CSIS Mekhe</a>&nbsp;&nbsp;
		<br><br>
		<a href="listePISTivaouane.php">CSIS Tivaouane</a>&nbsp;&nbsp;</div>
		
		
	</tr>
</table>
</div>
</div>
</body>
</html>