<?php
//mysql.hostinger.fr
//u862126254_kira
//AFLHsSpwT9i6
//u862126254_hs
	function co(){
	$s = '127.0.0.1';
	$l = 'root';
	$p = 'root';
	$b = 'sitehs';


	try {
    	$c = new PDO("mysql:host=".$s.";dbname=".$b."", $l, $p);
    	$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$c->exec("SET CHARACTER SET utf8");
    }
	catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
	return $c;
	}
?>