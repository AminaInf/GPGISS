<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " typeFonction LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/><br/>
		<table border="" align="center" width="400px" rules="all">
		<tr align="left" border="2px">
			<th>Matricule</th><th>TypeFonction</th>
		</tr>
	<?php
		$query=mysql_query("select* from  fonction WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($typeFonction= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $typeFonction['idAgent']; ?></td>
					<td><?php echo $typeFonction['typeFonction']; ?></td>
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