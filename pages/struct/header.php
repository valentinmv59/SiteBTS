<?php
	function struct_header(){
		echo '
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Maison des ligues</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Site de la maison des ligues" />
		<meta name="author" content="Dieuveille & Valentin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="header">
			  	<div class="col-2 col-m-2 menu">
			  		<div class="logo">
			  			<img src="images/logo.png" alt="MDL logo">
			  		</div>
	  			</div>
	  			<div class="col-8 col-m-8 menu">
	  				<ul>
	  					<li><a href="index.php">Accueil</a></li>
	  					<li><a href="index.php?page=p_formation">Formations</a></li>
	  					<li><a href="index.php?page=p_assos">Associations</a></li>';
	  		if (isset($_SESSION['type']) && $_SESSION['type'] == '2')
	  			echo '<li><a href="index.php?page=p_admin">Admin</a></li>';
	  		else if(isset($_SESSION['id']))
	  				echo '<li><a href="index.php?page=p_profil">Profil</a></li>';
	  		else
	  			echo '<li><a href="index.php?page=p_connexion">Connexion</a></li>';

	 		echo '
	  				</ul>
	  			</div>
		</div>';
	}
?>