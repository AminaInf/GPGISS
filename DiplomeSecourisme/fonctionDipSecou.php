<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " typeSecou LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="" align="center" width="500px" rules="all">
		<tr align="left" border="2px">
			<th>IdSecourisme</th><th>TypeSecourisme</th>
		</tr>
	<?php
		$query=mysql_query("select* from  diplomesecourisme WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($typeSecou= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $typeSecou['idSecou']; ?></td>
					<td><?php echo $typeSecou['typeSecou']; ?></td>
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