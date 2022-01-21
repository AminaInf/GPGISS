<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nomCentre LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="" align="center" width="500px" rules="all">
		<tr align="left" border="2px">
			<th>IdCentre</th><th>IdVille</th><th>NomCentre</th><th>Telephone</th><th>Email</th>
		</tr>
	<?php
		$query=mysql_query("select* from  centre WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nomCentre= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nomCentre['idCentre']; ?></td>
					<td><?php echo $nomCentre['idVil']; ?></td>
					<td><?php echo $nomCentre['nomCentre']; ?></td>
					<td><?php echo $nomCentre['telephone']; ?></td>
					<td><?php echo $nomCentre['email']; ?></td>
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