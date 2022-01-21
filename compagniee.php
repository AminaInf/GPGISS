<?php
	include('connexion.php');
		if(isset($_POST['valider']))
	{
			$nomVil=$_POST['nomVil'];
			$nomUnite=$_POST['nomUnite'];
			$tel=$_POST['tel'];
			$mail=$_POST['mail'];
			
			$result=mysql_query("insert into compagnie(idCompagnie,nomVil,nomUnite,tel,mail)  values('','".$nomVil."','".$nomUnite."','".$tel."','".$mail."')");
			$query=mysql_query("update agentcomp set nomUnite = (select nomUnite from compagnie where compagnie.idCompagnie = LAST_INSERT_ID()) where idAgent=LAST_INSERT_ID()");
		
			if(($result) || ($query))
			{
				echo "<font color='green' size='10'><p align='center'>Insertion bien effectue</p></font>";
			}
			else 
			{
				echo "<font color='green' size='10'><p align='center'>Insertion bien effectue</p></font>";
			}
	}
?>