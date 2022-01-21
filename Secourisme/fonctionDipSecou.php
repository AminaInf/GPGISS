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
<h1 class="pt" align="center">Resultat de la recherche des diplomes de secourisme des agents</h1>
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
<table border="8px" align="center" width="500px" rules="all">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Matricule</th><th>Type Secourisme</th><th>Date Secourisme</th>
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
					<td><?php echo $typeSecou['idAgent']; ?></td>
					<td><?php echo $typeSecou['typeSecou']; ?></td>
					<td><?php echo $typeSecou['dateSecourisme']; ?></td>
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