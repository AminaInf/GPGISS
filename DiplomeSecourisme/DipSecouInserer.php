<?php
	if(isset($_POST['Enregistrer'])){
			$idSecou=$_POST['idSecou'];
			$typeSecou=$_POST['typeSecou'];
			if(empty($_POST['idSecou']) || empty($_POST['typeSecou']))
				{
					header('location:saisiDipSecou.php?vide=veuillez remplir tous les champs&idSecou='.$idSecou.'&typeSecou='.$typeSecou);
					exit();
				}
				else{
				$idSecou=$_POST['idSecou'];
				$typeSecou=$_POST['typeSecou'];
				}
	}			
?>
