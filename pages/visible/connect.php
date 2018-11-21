<?php
	function connect(){
		$c = co();

		if(isset($_POST['mail'])){
			$asso = $c->query("select * FROM association WHERE courriel ='".$_POST['mail']."' AND mdp ='".md5($_POST['pswrd'])."'");
			while ($ligne = $asso->fetch_assoc())
			{
				$_SESSION['id'] = $ligne['idassociation'];
				$_SESSION['nom'] = $ligne['nom_assoc'];
				$_SESSION['vrainom'] = $ligne['nom'];
				$_SESSION['prenom'] = $ligne['prenom'];
				$_SESSION['ville'] = $ligne['ville'];
				$_SESSION['mail'] = $ligne['courriel'];	
				$_SESSION['tel'] = $ligne['tel'];
				$_SESSION['fax'] = $ligne['fax'];
				$_SESSION['type'] = "1"; //0 user 1 asso 2 admin
				header("location: index.php?page=p_profil");
			}	
		}
		elseif(isset($_POST['pseudo'])){
			$asso = $c->query("select * FROM mrbs_users WHERE name ='".$_POST['pseudo']."' AND password_hash ='".md5($_POST['pswrd'])."'");
			while ($ligne = $asso->fetch_assoc())
			{
				$_SESSION['id'] = $ligne['id'];
				$_SESSION['nom'] = $ligne['name'];
				$_SESSION['type'] = $ligne['level'];
				$_SESSION['vrainom'] = "Admin";
				$_SESSION['prenom'] = "Admon";
				$_SESSION['ville'] = "unknown";
				$_SESSION['mail'] = $ligne['email'];	
				$_SESSION['tel'] = "unknown";
				$_SESSION['fax'] = "unknown";
				$_SESSION['type'] = "2";
				header("location: index.php?page=p_admin");
			}
		}
	}
?>