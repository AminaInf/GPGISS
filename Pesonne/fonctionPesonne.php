<html>
<head>
	
	<title>Moteur de Recherche</title>
			<meta name="viewport" content="width-device-width, initial-scale=1">
<link rel="stylesheet"  href="styleRc.css">
</head>
<body>
<br/><br/>
<h1 align="center" class="pt">Resultat de la recherche d'un membre de la famiille d'un agent</h1>
<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nom LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/>
<table border="8px" align="center" width="800px" rules="all">
<tr align="left" border="2px" bgcolor="#850303">
		<th>Agent</th><th>Nom</th><th>Prenom</th><th>DateNaissance</th><th>LieuNaissance</th><th>Tel</th><th>Adresse</th><th>Profil</th>
</tr>
	<?php
		$query=mysql_query("select idAgent,nom,prenom,dateNaiss,lieuNaiss,tel,adresse,profil from personne where $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nom= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nom['idAgent']; ?></td>
					<td><?php echo $nom['nom']; ?></td>
					<td><?php echo $nom['prenom']; ?></td>
					<td><?php echo $nom['dateNaiss']; ?></td>
					<td><?php echo $nom['lieuNaiss']; ?></td>
					<td><?php echo $nom['tel']; ?></td>
					<td><?php echo $nom['adresse']; ?></td>
					<td><?php echo $nom['profil']; ?></td>
				</tr>
	<?php
				
			}
		}
		
		else
		{
			echo " Pas de resultats trouvés ...";
		}
	
	}
	?>
</table>
</body>
</html>