<?php 
	function co() {
		$cnx = new mysqli("localhost","root","root","mrbs");
		$cnx->set_charset("utf8");
		return $cnx;
	}
?>