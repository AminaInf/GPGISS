<html>
	<head>
	<title>Compagnie</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="cssCom.css">

	</head>
<body>
</br></br>
<h1 class="pt" align="center">Liste de suppression d'un agent de la 23 CIS </h1>
<?php
	include('connexion.php');
	
	if(isset($_REQUEST["del"]))
	{
		$chk=$_REQUEST["chk"];
		$a=implode(",",$chk);
		mysql_query("delete from agentcomp where idAgent in($a)");
	}

	
?>
<form method="POST">		
<table border="1" align="center">	
<tr bgcolor="#850303" >
		<td>Agent</td><td>Nom</td><td>Prenom</td><td>DateNaiss</td><td>LieuNaiss</td><td>Matricule</td><td>NomUnite</td><td>NumeroCNI</td><td>Specialite</td>
		<td><input type="submit" name="del" value="delete"></td> 
</tr>
<?php
$query=mysql_query("select idAgent,nom,prenom,dateNaiss,lieuNaiss,matricule,nomUnite,numeroCNI,specialite from agentcomp where nomUnite= '23 CIS'");
	$rowcount=mysql_num_rows($query);		
	for($i=1;$i<=$rowcount;$i++)
	{ 
		$row=mysql_fetch_array($query);
?>
<tr>
		<td><?php echo $row["idAgent"]?></td>
		<td><?php echo $row["nom"]?></td>
		<td><?php echo $row["prenom"]?></td>
		<td><?php echo $row["dateNaiss"]?></td>
		<td><?php echo $row["lieuNaiss"]?></td>
		<td><?php echo $row["matricule"]?></td>
		<td><?php echo $row["nomUnite"]?></td>
		<td><?php echo $row["numeroCNI"]?></td>
		<td><?php echo $row["specialite"]?></td>
		<td><input type="checkbox" name="chk[]" value="<?php echo $row["idAgent"]?>"></td> 
</tr>
	
<?php
	
	}
?>
</table>
</form>
</body>
</html>