<?php
	function p_base(){
		$c = co();
		if(isset($_POST['inscri_assos'])){
			$assos = $_POST['nom_assos'];
			$icom = $_POST['num_icom'];
			$nom = $_POST['nom_dir'];
			$prenom = $_POST['prenom_dir'];
			$ville = $_POST['ville'];
			$email = $_POST['email'];
			$pswrd = md5($_POST['password']);
			$tel = $_POST['tel'];
			$fax = $_POST['fax'];

			if($c->query("INSERT INTO association (nom_assoc, ICOM, nom, prenom, ville, courriel, tel, fax, mdp) 
				VALUES ('$assos', '$icom', '$nom', '$prenom', '$ville', '$email', '$tel', '$fax', '$pswrd')")){
				header("location: index.php");
			}
		}
		else if(isset($_POST['formation_admin'])){
			$libelle = $_POST['titre'];
			$descriptif = $_POST['description'];
			$duree = $_POST['duree'];
			$stagiaireMin = $_POST['stag_min'];
			$stagiaireMax = $_POST['stag_max'];
			$domaine_iddomaine = $_POST['domaine'];

			if($c->query("INSERT INTO formation (libelle_formation, descriptif, duree, stagiaireMin, stagiaireMax, domaine_iddomaine)
				VALUES ('$libelle', '$descriptif', '$duree', '$stagiaireMin', '$stagiaireMax', '$domaine_iddomaine')")){
				header("location: index.php");
			}
		}
	}
?>