<html>
<head>
<link rel="stylesheet" type="text/css" href="">
<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>
<br/>
<body>
<h1 class="pt" align="center">Resultat de la recherche d'un diplome d'un agent</h1>
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
<br/>
		<table border="" align="center" width="500px" rules="all">
		<tr align="left" border="2px" bgcolor="#850303">
			<th>Nom Diplome</th><th>Matricule</th>
		</tr>
	<?php
		$query=mysql_query("select nomDip,idAgent from diplome WHERE $where");
		$rows=mysql_num_rows($query);
		if($rows)
		{
			while($nomDip= mysql_fetch_assoc($query))
			{
	?>
				<tr>
				    <td><?php echo $nomDip['nomDip']; ?></td>
					<td><?php echo $nomDip['idAgent']; ?></td>
					
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
</body>
</html>