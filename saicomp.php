<html>
	<head>
	<title>Centre</title>
			<meta charset="utf-8" />
			<meta name="viewport" content="width-device-width, initial-scale=1">
			
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="./Centre/cssComp.css">

	</head>
<body>
	
	<div id ="conteneur">
	
	<header>
		 <IMG SRC="./im/header.png"  width=1300px height=155px id="im">
		<!--<p id= "pt">
	
		bienvenue dans mon site</p> -->

	</header>
	
	
		 

<?php
	session_start();
?>
<SCRIPT language="JavaScript"> 
		function bonmail(mailteste) 
		{ 
			var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i'); 
			return(reg.test(mailteste)); 
		}
</SCRIPT>
<div id="droite" >
<form action="compagniee.php" method="POST">
	<table border="0" width="500px" cellpadding="10px" align="left">
		 <tr><td>Localite:</td><td><input type="text" name="nomVil" size="20px" /></td></tr>
		 <tr><td>NomUnite</td><td>
				<select name="nomUnite">
						<option value="21 CIS">21 CIS</option>
						<option value="22 CIS">22 CIS</option>
						<option value="23 CIS">23 CIS</option>
						<option value="24 CIS">24 CIS</option>
				</select>
			</td></tr>
		 <tr><td>Telephone</td><td><input type="text" name="tel"  size="20px" pattern = "[0-9]{9}"/></td></tr>
		 <tr><td>Email</td><td><input type="email" name="mail" size="20px" onsubmit="return bonmail(mailteste);"/></td></tr>
		<tr><td colspan="2"><input type="submit" name="valider" value="valider" class="btn"></td></tr>
	</table>
</form>
</div>
<?php
   /*if(!preg_match('#^7[6-80]([0-9]{2}){4}$#',$_POST['tel'])){
		$erreurs['tel'] = "Votre N° de portable n'est pas au bon format. <br /> 
		Il ne doit comporter que des chiffres (9 au maximum) et commencer par 77,78,76,70";
}*/
?>
<IMG SRC="./im/im9.jpg" id="comp">

<!--
<table>
<tr> /^7[6-80]([. -]?[0-9]{3})([. -]?[0-9]{2}){2}$/
	pattern="#(^7[6-80]([. -]?[0-9]{3})([. -]?[0-9]{2}){2})$#"
	<a href="index.php" id="a1">Nouveau</a>&nbsp;&nbsp;
	<a href="./Localite/saisilocalite.php" id="a2">Localite</a>&nbsp;&nbsp;
	<a href="listeAgent21CIS.php" id="a2">21 CIS</a>&nbsp;&nbsp;
	<a href="listeAgent22cis.php" id="a3">22 CIS</a>&nbsp;&nbsp;
	<a href="listeAgent23cis.php" id="a4">23 CIS</a>&nbsp;&nbsp;
	<a href="listeAgent24cis.php" id="a5">24 CIS</a>&nbsp;&nbsp;
</tr>

</table>
-->
<IMG SRC="./im/footer.png" id="ft">
</div>
</body>
</html>