<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " type LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="" align="center" width="400px" rules="all">
		<tr align="left" border="2px">
			<th>numeroPermis</th><th>Type</th><th>Duree</th><th>Etat</th>
		</tr>
	<?php
		$query=mysql_query("select* from permis WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($type= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $type['numeroPermis']; ?></td>
					<td><?php echo $type['type']; ?></td>
					<td><?php echo $type['duree']; ?></td>
					<td><?php echo $type['etat']; ?></td>
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