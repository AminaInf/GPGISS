<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " numeroCNI LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/><br/>
		<table border="1" align="center" width="800px" rules="all">
		<tr align="left">
			<th>NumeroCNI</th><th>Matricule</th><th>DateDeliverance</th><th>DateExpiration</th>
	<?php
		$query=mysql_query("select* from  cartedidentite WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($numeroCNI= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $numeroCNI['numeroCNI']; ?></td>
					<td><?php echo $numeroCNI['idAgent']; ?></td>
					<td><?php echo $numeroCNI['dateDeliverance']; ?></td>
					<td><?php echo $numeroCNI['dateExpiration']; ?></td>
					
					
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