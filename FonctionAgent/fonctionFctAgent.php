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
<br/><br/><br/>
		<table border="" align="center" width="600px" rules="all">
		<tr align="left" border="2px">
			<th>Matricule</th><th>IdFonction</th><th>DateDebut</th><th>DateFin</th>
		</tr>
	<?php
		$query=mysql_query("select* from  fonctionagent WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($matricule= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $matricule['matricule']; ?></td>
					<td><?php echo $matricule['idFonction']; ?></td>
					<td><?php echo $matricule['dateDebut']; ?></td>
					<td><?php echo $matricule['dateFIN']; ?></td>
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