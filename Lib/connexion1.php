<?php
$base="gpgiss";
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
if(!$con)die("erreur de connexion à MYSQL");
mysql_select_db($base);
?>