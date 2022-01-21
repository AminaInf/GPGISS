<?php
 
session_start();
    include('connexion.php');
$max = 0;
if (isset($_POST['max'])) {
  $max = $_POST['max'];
}
for ($i=0;$i<$max;$i++) {
  if (isset($_POST['delete_'.$i])) {
    //echo 'no '.$i.' '.$_POST['delete_'.$i].'<br>';
	$_POST['delete_'.$i];
	$idAgent = $_POST['delete_'.$i];
	$Stock5 = $_POST['Valeur'];
	$datmut=$_POST['dat'];
	$result=mysql_query("update gpgiss.agent set nomCentre = '$Stock5' ,datemutation='$datmut' WHERE idAgent = $idAgent");
	if($result)
					{
						echo "<font color='green' size='10'><p align='center'>Mutation reussie</p></font>";
					}
	
  }
}
	
?>