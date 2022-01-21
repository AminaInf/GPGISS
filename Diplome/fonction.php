<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nomDip LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/><br/>
		<table border="" align="center" width="500px" rules="all">
		<tr align="left" border="2px">
			<th>IdDiplome</th><th>NomDiplome</th>
		</tr>
	<?php
		$query=mysql_query("select* from  diplome WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nomDip= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nomDip['idDip']; ?></td>
					<td><?php echo $nomDip['nomDip']; ?></td>
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