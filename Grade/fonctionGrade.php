<html>
	<head>
	<meta charset="utf-8">
	<title>grade</title>
	<meta charset="utf-8">
	
	</head>
<body>
<br/>
<h1 class="pt" align="center">Résultat de la recherche des grades </h1>
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
<table border="8px" align="center" width="400px" rules="all">
		<tr align="left" border="2px" bgcolor="#850303">
			<th>Matricule</th><th>Type Grade</th><th>Date Nomination</th>
		</tr>
	<?php
		$query=mysql_query("select* from  grade WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($idAgent= mysql_fetch_assoc($query))
			{
	?>
				<tr>
				    <td><?php echo $idAgent['idAgent']; ?></td>
					<td><?php echo $idAgent['type']; ?></td>
					<td><?php echo $idAgent['dateNomination']; ?></td>
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