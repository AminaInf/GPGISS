<html>
	<head>
	<title>Rapport</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="code.css"/>
	</head>
<body>
<div id ="conteneur"> 
<?php
include('connexion.php');
?>
<br/>
<h1 align="center"> Les fichiers PDF recus</h1>
<form method="POST">		
		<table border="1">	
<table border="1">	
	<tr align="center" border="1px" bgcolor="#850303"> 
		<th>Fichier Enregistres</th>
	</tr>
<?php

				$liste=mysql_query("select name,file_url,nomcentcomp from fichier WHERE nomcentcomp='CSIS Mekhe'");
				while($info=mysql_fetch_array($liste))
				{				
?>			
	<tr>
		<td><?php echo $info['name'].' : '.'<a href="'.$info['file_url'].'" >Telecharger '.$info['name'].'</a>';?></td>
	</tr>
<?php
}
?>
</form>		
</table>	
</div> 
</body>
</html>