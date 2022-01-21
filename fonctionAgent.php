<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " aptitude LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
		<table border="1" align="center" width="1000px" rules="all">
		<tr align="left">
			<th>Matricule</th><th>IdGrade</th><th>NumeroCNI</th><th>NumeroMutuel</th><th>IdGSanguin</th><th>IdPermis</th><th>IdMajor</th>
			<th>IdCategorie</th><th>CCPA</th><th>DateIncorporation</th><th>LimiteAge</th><th>Prevention</th><th>Specialite</th>
			<th>NumeroCIM</th><th>Aptitude</th><th>Numero</th><th>DateNomination</th>
		</tr>
	<?php
		$query=mysql_query("select* from  agent WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($aptitude= mysql_fetch_assoc($query))
			{
	?>
				<tr>
					<td><?php echo $aptitude['matricule']; ?></td>
					<td><?php echo $aptitude['idGrade']; ?></td>
					<td><?php echo $aptitude['numeroCNI']; ?></td>
					<td><?php echo $aptitude['numeroMutuel']; ?></td>
					<td><?php echo $aptitude['idG']; ?></td>
					<td><?php echo $aptitude['idPermis']; ?></td>
					<td><?php echo $aptitude['id']; ?></td>
					<td><?php echo $aptitude['idCat']; ?></td>
					<td><?php echo $aptitude['ccpa']; ?></td>
					<td><?php echo $aptitude['datteIncorporation']; ?></td>
					<td><?php echo $aptitude['limiteAge']; ?></td>
					<td><?php echo $aptitude['prevention']; ?></td>
					<td><?php echo $aptitude['specialite']; ?></td>
					<td><?php echo $aptitude['numeroCim']; ?></td>
					<td><?php echo $aptitude['aptitude']; ?></td>
					<td><?php echo $aptitude['numero']; ?></td>
					<td><?php echo $aptitude['dateNomination']; ?></td>
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