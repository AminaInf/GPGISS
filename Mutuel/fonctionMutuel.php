<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " numeroMutuel LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="" align="center" width="400px" rules="all">
		<tr align="left" border="2px">
			<th>NumeroMutuel</th><th>DateCreation</th>
		</tr>
	<?php
		$query=mysql_query("select* from  mutuel WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($numeroMutuel= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $numeroMutuel['numeroMutuel']; ?></td>
					<td><?php echo $numeroMutuel['dateCreation']; ?></td>
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