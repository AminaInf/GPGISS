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
<br/><br/><br/><br/>
		<table border="1" align="center" width="1000px" rules="all">
		<tr align="left">
			<th>Matricule</th><th>Grade</th><th>NumeroCNI</th><th>NumeroMutuel</th><th>GroupeSanguin</th><th>NumeroPermis</th><th>EtatMajor</th><th>Nom</th><th>Prenom</th>
			<th>DateNaissance</th><th>LieuNaissance</th><th>CCPA</th><th>DateIncorporation</th><th>LimiteAge</th><th>Prevention</th><th>Specialite</th><th>NumeroCIM</th>
			<th>Aptitude</th><th>Numero</th><th>Echelon</th><th>Echelle</th><th>DateNomination</th>
		</tr>
	<?php
		$query=mysql_query("select* from  agent WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nom= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nom['matricule']; ?></td>
					<td><?php echo $nom['idGrade']; ?></td>
					<td><?php echo $nom['numeroCNI']; ?></td>
					<td><?php echo $nom['numeroMutuel']; ?></td>
					<td><?php echo $nom['idG']; ?></td>
					<td><?php echo $nom['numeroPermis']; ?></td>
					<td><?php echo $nom['id']; ?></td>
					<td><?php echo $nom['nom']; ?></td>
					<td><?php echo $nom['prenom']; ?></td>
					<td><?php echo $nom['dateNaiss']; ?></td>
					<td><?php echo $nom['lieuNaiss']; ?></td>
					<td><?php echo $nom['ccpa']; ?></td>
					<td><?php echo $nom['datteIncorporation']; ?></td>
					<td><?php echo $nom['limiteAge']; ?></td>
					<td><?php echo $nom['prevention']; ?></td>
					<td><?php echo $nom['specialite']; ?></td>
					<td><?php echo $nom['numeroCim']; ?></td>
					<td><?php echo $nom['aptitude']; ?></td>
					<td><?php echo $nom['numero']; ?></td>
					<td><?php echo $nom['echelon']; ?></td>
					<td><?php echo $nom['echelle']; ?></td>
					<td><?php echo $nom['dateNomination']; ?></td>
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