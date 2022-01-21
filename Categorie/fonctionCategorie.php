<html>
	<head>
	<meta charset="utf-8">
	<title>Categorie</title>
	<meta charset="utf-8">
	
	</head>

<body>
<br/>
<h1 class="pt" align="center">Resultat de la recherche d'une categorie d'un agent</h1>
<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nomCategorie LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/>
		<table border="1" align="center" width="400px" rules="all">
		<tr align="left">
			<th>Matricule</th><th>Nom Categorie</th>
		</tr>
	<?php
		$query=mysql_query("select* from  categorie WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nomCategorie= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nomCategorie['idAgent']; ?></td>
					<td><?php echo $nomCategorie['nomCategorie']; ?></td>
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