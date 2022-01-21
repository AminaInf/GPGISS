 <?php
 //include('connexion.php');
 require_once('connexion1.php');
 /* $host="localhost";
	$user="root";
	$pass="";
	$base="gpgiss";
	$db=mysql_connect($host, $user, $pass, $base); */
	session_start();
 $username="";
 $profil="";
 $errors=array();
 // se connecter a la bd


	
	//mysql_select_db($base);
	if(isset($_POST['registre'])){
	$username=mysqli_real_escape_string($con, $_POST['username']);
	$profil=mysqli_real_escape_string($con, $_POST['profil']);
	$password_1=mysqli_real_escape_string($con, $_POST['password_1']);
	$password_2=mysqli_real_escape_string($con, $_POST['password_2']);
	//s'assurer que les donnees du formulaire st enregistrer
	if(empty($username)){
		array_push($errors, "username ne doit pas etre vide ");
	}
	if(empty($profil)){
		array_push($errors, "profil ne doit pas etre vide ");
	}
	if(empty($password_1)){
		array_push($errors, "password ne doit pas etre vide ");
	}
	if($password_1 != $password_2){
		array_push($errors, "les deux mots de passse ne sont pas identique");
	}
	// s'il n'y a pas d'erreurs sauvegarder l'utilisateur dans la bd
	if (count($errors) == 0){
		$password=md5($password_1);//crypter le mots de passe avant de le stocker dans la bd
		$sql= "insert into compte(profil, username, password) values('$profil', '$username', '$password')";					
				$result = mysqli_query($con, $sql);
				if($result){
				$_SESSION['username']=$username;
				$_SESSION['success']="vous etes maintenant connecté";
				header('location: login.php');//rediriger ver la pag d'acceuil
				}
				else{
					
					echo "<font border='5' color='red' size='5'><p align='center'>le profil existe deja</p></font>";
				}
				 
		
	}
	
	}	
	//enregistrer l'utilisatuer dans la page de connexion du formulaire
	if(isset($_POST['login'])) {
	$username=mysqli_real_escape_string($con, $_POST['username']); 
	$password=mysqli_real_escape_string($con, $_POST['password']);
	//s'assurer que les donnees du formulaire st enregistrer
	$username=$_POST['username']; 
	$password=$_POST['password'];
	if(empty($username)){
		array_push($errors, "username ne doit pas etre vide ");
	}
	if(empty($password)){
		array_push($errors, "password ne doit pas etre vide ");
	}
	if(count($errors) == 0){
		/* header('location: index.php');
		exit(); */
		$password = md5($password);
		$query = "SELECT * FROM compte WHERE username='$username' and password='$password'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) != null){
			//connecter l'utilisateur
				$_SESSION["username"] = $username;
				$_SESSION['success'] = "vous etes maintenant connecté";
				header('location: index.php');
		}
		else{
			array_push($errors, "mauvaise combinaison username/password");
			//header('location: login.php');
		} 
		
	
	}	
	}
	//logout
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
	header('location: login.php');	}

?>