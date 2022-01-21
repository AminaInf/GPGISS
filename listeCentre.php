<?php
	include('connexion.php');
		if(isset($_POST['enreg']))
	{
			$nomVil=$_POST['nomVil'];
			$nomCentre=$_POST['nomCentre'];
			$telephone=$_POST['telephone'];
			$email=$_POST['email'];
			$result=mysql_query("insert into centre(idCentre,nomVil,nomCentre,telephone,email)  values('','".$nomVil."','".$nomCentre."','".$telephone."','".$email."')");
			$req=mysql_query("update agent set nomCentre = (select nomCentre from centre where centre.idCentre = LAST_INSERT_ID()) where idAgent=LAST_INSERT_ID()");
			//$req=mysql_query("insert into agent  (nomCentre) select nomCentre from centre where idCentre=LAST_INSERT_ID() and agent.idAgent=LAST_INSERT_ID()");
			if(($result) || ($req))
			{
				echo "<font color='green' size='10'><p align='center'>Insertion bien effectue</p></font>";
			}
			else
			{
				echo "<font color='green' size='10'><p align='center'>Verifiez l'insertion</p></font>";
			}
	}
?>