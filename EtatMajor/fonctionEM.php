<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " id LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="1" align="center" width="200px" rules="all">
		<tr align="left">
			<th>IdEtatMajor</th>
		</tr>
	<?php
		$query=mysql_query("select* from  etatmajor WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($id= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $id['id']; ?></td>
					
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