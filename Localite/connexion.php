<?php
	$host="localhost";
	$user="root";
	$pass="";
	$base="gpgiss";

	@$con=mysql_connect($host,$user,$pass);
	mysql_select_db($base);
	if(!$con)die("erreur de connexion a MYSQL");
?>