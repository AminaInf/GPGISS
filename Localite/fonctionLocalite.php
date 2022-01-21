<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nomVil LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/><br/>
		<table border="" align="center" width="400px" rules="all">
		<tr align="left" border="2px">
			<th>NomVille</th><th>Population</th>
		</tr>
	<?php
		$query=mysql_query("select* from  localite WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nomVil= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nomVil['nomVil']; ?></td>
					<td><?php echo $nomVil['population']; ?></td>
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