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
		<table border="" align="center" width="800px" rules="all">
		<tr align="left" border="2px">
			<th>Matricule</th><th>IdCompagnie</th><th>ReferenceMutation</th><th>DateMutation</th><th>NombreMutation</th>
		</tr>
	<?php
		$query=mysql_query("select* from mutation WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($matricule= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $matricule['matricule']; ?></td>
					<td><?php echo $matricule['idCompagnie']; ?></td>
					<td><?php echo $matricule['refMutt']; ?></td>
					<td><?php echo $matricule['dateMut']; ?></td>
					<td><?php echo $matricule['nbreMutation']; ?></td>
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