<?php
	//Base Gestion PageS
	require('config.php');
	require('visible/p_index.php');
	require('visible/p_connexion.php');
	require('visible/connect.php');
	require('visible/p_formation.php');
	require('visible/p_assos.php');
	require('visible/p_profil.php');
	require('visible/p_admin.php');
	require('visible/base.php');

	function gestion_pages($page){
		switch ($page) {
			case 'p_index':
				p_index();
				break;
			case 'p_connexion':
				p_connexion();
				break;
			case 'connect':
				connect();
				break;
			case 'p_formation':
				p_formation();
				break;
			case 'p_assos':
				p_assos();
				break;
			case 'p_profil':
				p_profil();
				break;
			case 'p_admin':
				p_admin();
				break;
			case 'p_base':
				p_base();
				break;
			default:
				p_404();
				break;
		}
	}
?>