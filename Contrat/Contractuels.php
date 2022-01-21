<html>
	<head>
	<title>Contrat</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="modif.css"/>
	</head>
<body>
<br>
<h1 id="p" align="center">Liste Des Contractuels </h1>
<?php
include('connexion.php');
	
?>
<table border="8px" align="center" width="800px" rules="all" class="tab">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Nom</th><th>Prénom</th><th>Debut Contrat</th><th>Fin Contrat</th>
	</tr>
	
<?php
	
	$liste=mysql_query("select matricule,nom, prenom,debutContrat, finContrat
	from contrat,agent where contrat.idAgent=agent.matricule ");
	while($info=mysql_fetch_array($liste))
	{
		
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['debutContrat']; ?></td>
		<td><?php echo $info['finContrat']; ?></td>
	</tr>
	<?php
	}
?>
<?php
	
	$liste=mysql_query("select matricule,nom, prenom,debutContrat, finContrat
	from contrat,agentcomp where contrat.idAgent=agentcomp.matricule");
	while($info=mysql_fetch_array($liste))
	{
		
?>
	<tr>
		<td><?php echo $info['matricule']; ?></td>
		<td><?php echo $info['nom']; ?></td>
		<td><?php echo $info['prenom']; ?></td>
		<td><?php echo $info['debutContrat']; ?></td>
		<td><?php echo $info['finContrat']; ?></td>
	</tr>
	<?php
	}
?>
</table>
<!--
<table>
	<tr>
		<a href="saisiContrat.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="rechercheContrat.php" id="a2">Rechercher</a>&nbsp;&nbsp;
		
		
	</tr>
</table>
-->
</body>
</html>