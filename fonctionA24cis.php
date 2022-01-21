<html>
<body>
<br/><br/>
<h1 class="pt" align="center">Resultat de recherche d'un agent de la 24 CIS </h1>
<?php
	include('connexion.php');
	function results($search)
	{
		$where = "";
		$search = preg_split('/[\s\-]/',$search);
		$count_keywords = count($search);
		foreach($search as $key=>$searches)
		{
			$where .= " nom LIKE '%$searches%'";
			if($key != ($count_keywords-1))
			{
				$where .=" AND ";
			}
		}
			
	
?>
<br/><br/><br/>
<table border="" align="center" width="500px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Agent</th><th>Nom</th><th>Prenom</th><th>DateNaiss</th><th>LieuNaiss</th><th>Matricule</th><th>NomUnite</th><th>NumeroCNI</th><th>Specialite</th>
	</tr>
	<?php
		$query=mysql_query("select idAgent,nom,prenom,dateNaiss,lieuNaiss,matricule,nomUnite,numeroCNI,specialite from  agentcomp WHERE $where and nomUnite='24 CIS'");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nom= mysql_fetch_assoc($query))
			{
	?>
						<tr>
							<td><?php echo $nom['idAgent']; ?></td>
							<td><?php echo $nom['nom']; ?></td>
							<td><?php echo $nom['prenom']; ?></td>
							<td><?php echo $nom['dateNaiss']; ?></td>
							<td><?php echo $nom['lieuNaiss']; ?></td>
							<td><?php echo $nom['matricule']; ?></td>
							<td><?php echo $nom['nomUnite']; ?></td>
							<td><?php echo $nom['numeroCNI']; ?></td>
							<td><?php echo $nom['specialite']; ?></td>
						</tr>
				<?php
			}
			?>
	<?php
				
		}else
				{
					echo " Pas de resultats trouves ...";
				}
	?>
<?php
	}	
	?>	
</table>
</body>
</html>