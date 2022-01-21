 <?php include('serveur1.php'); ?>
 <!DOCTYPE html>
 <html>
	 <head>
	 <title>Conexion</title>
			<meta charset="utf-8" />
		<link rel="stylesheet"href="styl.css"/>
	 </head>
		 <body>
			<div id="tou">
		 <div class ="header">
			<h2>Registre</h2>
		 </div>
			<form method="post" action="registre.php" >
			<!-- afficher les erreurs de validation ici -->
			<?php include('erreur.php'); ?>
				<div class="formu">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		 </div>
		 <div class="formu">
			<label>Profil</label>
			<select name="profil">
						<option value="Sergent-chef">Sergent-chef</option>
						<option value="Commandant CIS1">Commandant CIS1</option>
						<option value="Commandant CIS2">Commandant CIS2</option>
						<option value="Commandant CIS3">Commandant CIS3</option>
						<option value="Commandant CIS4">Commandant CIS4</option>
						<option value="Chef CSIS1">Chef CSIS1</option>
						<option value="Chef CSIS2">Chef CSIS2</option>
						<option value="Chef CSIS3">Chef CSIS3</option>
						<option value="Chef CSIS4">Chef CSIS4</option>
						<option value="Chef CSIS5">Chef CSIS5</option>
						
				</select>
		 </div>
		 <div class="formu">
			<label>Password</label>
			<input type="password" name="password_1">
		 </div>
		 <div class="formu">
			<label>Confirme Password</label>
			<input type="password" name="password_2">
		 </div>
		 <div class="formu">
				<button type="submit" name="registre" class="btn">Valider</button>
		 </div>
		 <p id ="l">Deja membre?&nbsp;&nbsp;&nbsp; <a href="login.php" id ="a"> Se Connecter</a></p>
			</form>
			</div>
			<br/>
		 </body>
 </html>
 