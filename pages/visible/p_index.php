<?php
	function p_index(){
		$c = co();
		$formations = $c->query("select * FROM formation limit 5");
		echo '
			<div class="content1 col-6 col-m-12">
				<h3>Bienvenue sur le site de la MDL</h3>
			</div>

			<div class="content2 col-4 col-m-12">
				<h3>Nos formations</h3>
		';
		while ($ligne = $formations->fetch_assoc())
		{
		echo $ligne ['idformation']." ".$ligne['libelle_formation']."</br>";
		}
		echo'		
			</div>
		';
	}
?>