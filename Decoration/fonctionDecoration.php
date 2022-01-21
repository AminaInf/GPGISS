<html>
<head>
	<title>Decoration</title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="styleRc.css">
	</head>
<body>
<br>
<h1 id="p" align="center">Résultat de la recherche d'une décoration d'un agent</h1>
<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " typeDeco LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/>
<table border="" align="center" width="700px" rules="all">
		<tr align="left" border="2px" bgcolor="#850303">
			<th>Matricule</th><th>Decoration</th><th>Type Décoration</th>
		</tr>
	<?php
		$query=mysql_query("select idDeco,idAgent,anneeDeco,typeDeco from  decoration WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($typeDeco= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $typeDeco['idAgent']; ?></td>
					<td><?php echo $typeDeco['typeDeco']; ?></td>
					<td><?php echo $typeDeco['anneeDeco']; ?></td>
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