<br/>
<html>
<head>
	<title>interruption</title>
	<meta charset="utf-8">
		
	</head>
<body>
<h1 id="p" align="center">Resultat de la recherche des interruptions</h1>
<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " idAgent LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/>
		<table border="" align="center" width="400px" rules="all">
		<tr align="left" border="2px">
			<th>Matricule</th><th>Date Debut</th><th>Date Rectifié Départ</th>
		</tr>
	<?php
		$query=mysql_query("select* from  interruption WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($idAgent= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $idAgent['idAgent']; ?></td>
					<td><?php echo $idAgent['dateDebut']; ?></td>
					<td><?php echo $idAgent['drds']; ?></tr>
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