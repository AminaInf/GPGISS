<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " matricule LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/><br/>
		<table border="" align="center" width="500px" rules="all">
		<tr align="left" border="2px">
		<caption> Résultat de la recherche </caption>
			<th>IdPersonne</th><th>Matricule</th><th>IdInterruption</th>
		</tr>
	<?php
		$query=mysql_query("select* from  agentgrade WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($matricule= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $matricule['idPersonne']; ?></td>
					<td><?php echo $matricule['matricule']; ?></td>
					<td><?php echo $matricule['idInt']; ?></td>
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