<?php
	try
	{
		$base=new PDO('mysql:host=localhost;dbname=gpgiss' , 'root', '');
		
	}catch(PDOException $e)
	{
		die('erreur:'.$e->getMessage());
	}
?>