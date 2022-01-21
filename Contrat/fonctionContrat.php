<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " debutContrat LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="" align="center" width="500px" rules="all">
		<tr align="left" border="2px">
			<th>Contrat</th><th>Matricule</th><th>DebutContrat</th><th>FinContrat</th>
		</tr>
	<?php
		$query=mysql_query("select* from  contrat WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($debutContrat= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $debutContrat['idContrat']; ?></td>
					<td><?php echo $debutContrat['idAgent']; ?></td>
					<td><?php echo $debutContrat['debutContrat']; ?></td>
					<td><?php echo $debutContrat['finContrat']; ?></td>
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