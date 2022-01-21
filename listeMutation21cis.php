<?php
session_start();
include('connexion.php');

?>
</br></br>
<html>
	<head>
	<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="liste.css"/>
	</head>
<body>
<div id ="conteneur"> 
</br></br>
<h1 class="pt" align="center">Liste des agents du 21 CIS qui doivent être muter</h1>
</br>
<form method="POST" action="modifierMutation.php">
<table border="8px" align="center">
	<tr align="left" border="2px" bgcolor="#850303">
		<th>Agent</th><th>Nom</th><th>Prenom</th><th>Date Naiss</th><th>Lieu Naiss</th><th>Matricule</th><th>Nom Unite</th><th>Numero CNI</th><th>Specialite</th><th>RefMutation</th><th>Action</th>
	</tr>
<?php
 $i=0;
	$liste=mysql_query("select idAgent,nom,prenom,dateNaiss,lieuNaiss,matricule,nomUnite,numeroCNI,specialite,refMutt from gpgiss.agentcomp where nomUnite='21 CIS' ");
	while($info=mysql_fetch_array($liste))
	{
?>
  <?php
    echo "<tr>";
        echo "<td>".$info['idAgent']."</td>";
        echo "<td>".$info["nom"]."</td>";
		echo "<td>".$info["prenom"]."</td>";
		echo "<td>".$info["dateNaiss"]."</td>";
		echo "<td>".$info["lieuNaiss"]."</td>";
		echo "<td>".$info['matricule']."</td>";
		echo "<td>".$info["nomUnite"]."</td>";
		echo "<td>".$info["numeroCNI"]."</td>";
		echo "<td>".$info["specialite"]."</td>";
		echo "<td>".$info["refMutt"]."</td>";
        echo"<td><input type='checkbox' name='delete_$i' value='".$info['idAgent']."'></td>";
        ?>
        <?php
    echo "</tr>";
  $i++;
}
echo "</TABLE>";
// on ferme la connexion à mysql
 
?>
</br></br></br></br>
  <input type="hidden" name="max" value="<?php echo $i; ?>">
  <tr><td>Nom Unite</td><td>
				<select name="Valeur">
						<option value=""></option>
						<option value="21 CIS">21 CIS</option>
						<option value="22 CIS">22 CIS</option>
						<option value="23 CIS">23 CIS</option>
						<option value="24 CIS">24 CIS</option>
				</select>
		</td></tr>
		<br/><br/>
<tr><td > Date mutation</td><input type="date" name="dat" id="td" ></tr>
<br/><br/>
<input type="submit" value="Muter" id="input" />
</table>
</form>
</body>
</html>
