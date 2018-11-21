<?php
	function p_profil(){
		$c = co();

		if(isset($_GET['deco'])){
			session_destroy();
			header("location: index.php");
		}

		if(isset($_SESSION['id'])){

			echo '
			<h2>'.$_SESSION['nom'].'</h2>
			<p>Cliquez <a href="index.php?page=p_profil&deco=1">ici</a> pour vous déconnecter</p>
			Nom : '.$_SESSION['vrainom'].'<br>
			Prénom : '.$_SESSION['prenom'].'<br>
			Ville : '.$_SESSION['ville'].'<br>
			Couriel : '.$_SESSION['mail'].'<br>
			Tel : '.$_SESSION['tel'].'<br>
			Fax : '.$_SESSION['fax'].'<br>
			';

		}else{
			header("location: index.php");
		}
	}
?>