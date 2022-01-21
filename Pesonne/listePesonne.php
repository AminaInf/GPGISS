<html>
	<head> 	
	<title>Famille</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="modif.css">

</head>
<body>
<br/><br/>
<h1 align="center" class="pt">Liste de la famille d'un agent</h1>
<?php
include('connexion.php');
?>
<br/><br/>
<table border="8px" align="center" width="800px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Agent</th><th>Nom</th><th>Prenom</th><th>DateNaiss</th><th>LieuNaiss</th><th>Profil</th><th>Tel</th><th>Adresse</th>
	</tr>
	
<?php
	$liste=mysql_query("select personne.idPersonne,idAgent,nom,prenom,dateNaiss,lieuNaiss,profil,tel,adresse from personne");
	while($info=mysql_fetch_array($liste))
	{
?>
	<tr>
		<td><?php echo $info['idAgent']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['dateNaiss']; ?></td>
		<td><?php echo $info['lieuNaiss']; ?></td>
		<td><?php echo $info['profil']; ?></td>
		<td><?php echo $info['tel']; ?></td>
		<td><?php echo $info['adresse']; ?></td>
	</tr>
<?php
}
?>
<!--
<br/>
<table>
	<tr>
		<a href="saisiPesonne.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="recherchePesonne.php" id="a2">Rechercher</a>&nbsp;&nbsp;
		<a href="affichePesonne.php"  id="a3">Modifier</a>&nbsp;&nbsp;
	</tr>
</table>
-->
</body>
</html>