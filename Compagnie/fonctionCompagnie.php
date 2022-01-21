<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nomComp LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="" align="center" width="500px" rules="all">
		<tr align="left" border="2px">
			<th>IdCompagnie</th><th>IdUnite</th><th>IdVille</th><th>NomCompagnie</th><th>Telephone</th><th>Email</th>
		</tr>
	<?php
		$query=mysql_query("select* from  compagnie WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nomComp= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $nomComp['idCompagnie']; ?></td>
					<td><?php echo $nomComp['idUnite']; ?></td>
					<td><?php echo $nomComp['idVil']; ?></td>
					<td><?php echo $nomComp['nomComp']; ?></td>
					<td><?php echo $nomComp['telephone']; ?></td>
					<td><?php echo $nomComp['email']; ?></td>
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