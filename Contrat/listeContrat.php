
<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="styleContrat.css"/>
	</head>
<body>

<?php
include('connexion.php');
?>

<table border="3px" align="center" width="800px" rules="all" class="tab">
	<caption id="p">LISTE DES CONTRACTUELS </caption>
	<tr align="left" border="2px">
		<th>IdContrat</th><th>Matricule</th><th>DebutContrat</th><th>FinContrat</th>
	</tr>
	
<?php
	$liste=mysql_query("select idContrat,idAgent,debutContrat,finContrat from contrat");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idContrat']; ?></td>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['debutContrat']; ?></td>
		<td><?php echo $info['finContrat']; ?></td>
	</tr>
	<?php
}
?>

<?php
$date = date("Y/m/d");
	
	list($jour,$mois,$annee) = explode('/', $date);
	$timestamp = strtotime($date . ' +6 month');
	$conver= getdate($timestamp);
	$affiche= $conver['mday'].'-'.$conver['mon'].'-'.$conver['year'];
	
	
	$liste=mysql_query("select finContrat from contrat ");
	while($info=mysql_fetch_array($liste)){
		
		if(strtotime($affiche) <= strtotime($info['finContrat'])){
			
			echo '<script language="Javascript">
							function mySoNiceSound(s)
				{
					var e=document.createElement("audio");
					e.setAttribute("src",s);
					e.play();
				}

				mySoNiceSound("son.mp3");
			alert (" Certains agents se rapprochent de leur fin contrat")
				document.location.href = "Contractuels.php";
			</script>';
			
	}
	
	}
		?>
</table>
<br/>
<table>
	<tr>
		<a href="saisiContrat.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheContrat.php" id="a2">Rechercher</a>&nbsp;&nbsp;
		<a href="afficheContrat.php" id="a3">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
</body>
</html>