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
include ('connexion.php') ;
if(!empty($_FILES))
{
	$file_name = $_FILES['fichier']['name'];
	$file_extension = strrchr($file_name, ".");
	
	//$file_nomcentcomp = $_FILES['fichier']['nomcentcomp'];
	
	$file_tmp_name = $_FILES['fichier']['tmp_name'];
	$file_dest = 'rapport/'.$file_name;
	
	
	//extensions autorisees pour l'envoi des fichiers
	
	$extension_autorisees = array('.pdf', '.PDF');
	$nomcentcomp = $_POST['nomcentcomp'];
	if(in_array($file_extension, $extension_autorisees))
	{
			if(move_uploaded_file($file_tmp_name, $file_dest))
			{
				$requete=mysql_query("insert into fichier (id,name,file_url,nomcentcomp) values ('','".$file_name."','".$file_dest."','".$nomcentcomp."')");
				echo 'fichier envoyé avec succés';
			}
			else
			{
				echo "Une erreur est survenue lors de l'envoi du fichier";
			}		
	}
	else
	{
		echo 'seuls les fichiers PDF sont autorisés';
	}
}
?>
<br/><br/>

<h1> Envoyer un fichier PDF </h1>
<form method="POST" enctype="multipart/form-data">  
			<input type="file" name="fichier" value="Parcourir" /> </br> </br>
			<tr><td>Destinataire:</td><td>
			<select name="nomcentcomp">
					<option value="21 CIS">21 CIS</option>
					<option value="22 CIS">22 CIS</option>
					<option value="23 CIS">23 CIS</option>
					<option value="24 CIS">24 CIS</option>
					<option value="CSIS Bambey">CSIS Bambey</option> 
					<option value="CSIS Tivaouane">CSIS Tivaouane</option>
					<option value="CSIS Saly">CSIS Saly</option>
					<option value="CSIS Mekhe">CSIS Mekhe</option>
					<option value="CSIS Khombole">CSIS Khombole</option>
				</select>
			</td></tr>
			<input type="submit" name="Envoyer" value="Envoyer fichier" />
</form>
<br/>
</div> 
</body>
</html>