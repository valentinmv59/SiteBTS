<?php
	function p_connexion(){
		if(isset($_SESSION['id']))
			header("location: index.php");
		echo '
			<div class="content1 col-6 col-m-12">
				<h3>Connexion</h3>
			</div>

			<div class="content2 col-4 col-m-12">
				<h3>Association</h3>
				<form action="index.php?page=connect" method="POST">
				<label>E-mail</label> <input type="mail" required placeholder="le mail de l\'association" name="mail"><br>
				<label>Mot de passe</label> <input type="password" required placeholder="Hellgate" name="pswrd">	
				<input type="submit" value="valider"> 
				</form>	
				<h3>Administration</h3>
				<form action="index.php?page=connect" method="POST">
				<label>Pseudo</label> <input type="text" required placeholder="Hellgate" name="pseudo"><br>
				<label>Mot de passe</label> <input type="password" required placeholder="Hellgate" name="pswrd">	
				<input type="submit" value="valider"> 
				</form>		
			</div>	
		';
	}
?>