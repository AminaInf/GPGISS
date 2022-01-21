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
<br/><br/>
		<table border="" align="center" width="400px" rules="all">
		<tr align="left" border="2px">
			<th>IdPunition</th><th>Matricule</th><th>DatePunition</th>
		</tr>
	<?php
		$query=mysql_query("select* from punitionagent WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($matricule= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $matricule['idPunition']; ?></td>
					<td><?php echo $matricule['matricule']; ?></td>
					<td><?php echo $matricule['datePunition']; ?></td>
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