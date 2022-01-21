<html>
	<head>
	<title>Interruption</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1"/>
		<link rel="stylesheet" href="styleDeco.css"/>
	
	</head>
<body>
<div id ="conteneur">
	<?php
	session_start();
	?>
	<header>
		  <IMG SRC="../im/header.png"   height=155px id="im">
		 </header>
		 
<h1>
	
		Veuillez renseigner les champs svp</h1> 

<form action="" method="POST">
	<table border="0"  cellpadding="10px" align="center">
	     <tr><td>Matricule:</td><td><input type="text" name="idAgent" size="20px" /></td></tr>
		 <tr><td>DateDebut:</td><td><input type="date" name="dateDebut" size="20px" /></td></tr>
		 <tr><td>DateRectDepart:</td><td><input type="date" name="drds" size="20px" /></td></tr>
		 <tr><td colspan="2"><input type="submit" name="Enregis" value="Enregistrer" class="btn"></td> </tr>
		 
	</table>
</form>
<?php
include('connexion.php');
	if(isset($_POST['Enregis']))
	
	{
		$idAgent=$_POST['idAgent'];
		$dateDebut=$_POST['dateDebut'];
		$drds=$_POST['drds'];
			
				$result=mysql_query("insert into interruption (idInt,dateDebut,drds,idAgent) values ('','".$dateDebut."','".$drds."','".$idAgent."')");
		if($result)
		{
			echo "<font color='green' size='10'><p align='center'>Insertion bien effectuee</p></font>";
		}
		else
		{
			echo "<font color='red' size='10'><p align='center'>Echec insertion</p></font>";
		}
	}

?>

</div>
<?php
if(isset($_GET['vide'])){
			echo"<font color='red'>".$_GET['vide']."</font color>";
			}
?>
	

<!--	<table>
	<tr>
		<a href="saisiInterruption.php" id="a1">Nouveau</a>&nbsp;&nbsp;
		<a href="listeInterruption.php" id="a2">Interruptions</a>&nbsp;&nbsp;
	</tr>
</table>
	</div>
	-->
	</div>
</body>
</html>
