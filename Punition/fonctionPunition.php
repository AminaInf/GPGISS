<br/><br/>
<html>
<head>
</head>
<body>

<h1 align="center" class="pt">Liste des agents punis</h1>
<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nature LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/>
<table border="2px" align="center" width="700px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Nature Punition</th><th>Duree Punition</th><th>Date Punition</th>
	</tr>
	<?php
		$query=mysql_query("select* from punition WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nature= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nature['idAgent']; ?></td>
					<td><?php echo $nature['nature']; ?></td>
					<td><?php echo $nature['duree']; ?></td>
					<td><?php echo $nature['datePunition']; ?></td>
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