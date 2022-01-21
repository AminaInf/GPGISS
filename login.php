 <?php include('serveur1.php'); ?>
 <!DOCTYPE>
 <html>
	 <head>
	 <title>Conexion</title>
			<meta charset="utf-8" />
		<link rel="stylesheet"href="styl2.css"/>
	 </head>
		 <body>
			<div id="tou">
		 <div class ="header">
		 <div class ="ima">
		 <IMG SRC="./im/log.png" align=left width=185px height=75px ></div>
			<h2 id ="hd1">GPGISS</h2>
		 </div>
			<form method="post" action="login.php" >
			<!--  <IMG SRC="./im/fon10.jpg" align=left width=200px height=300px ></div> -->
			<!-- afficher les erreurs de validation ici -->
			<?php include('erreur.php'); ?>
				<div class ="formu">
			<label>Username</label>
			<input type="text" name="username">
		 </div>
		 <div class ="formu">
			<label>Password</label>
			<input type="password" name="password">
		 </div>
		 		 <div class ="formu">
					<button type="submit" name="login" class ="btn">Valider</button>
		 </div>
		 <p id ="l">Pas encore membre? &nbsp;&nbsp;<a href="registre.php" id ="a"> S'Inscrire</a></p>
		 <br>   
		 <IMG SRC="./im/footer.png" width=569px height=80px id="ft">
			</form>
			</div>
			
		 </body>
 </html>