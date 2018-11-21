<?php
	function p_formation(){
		$c = co();
		$formations = $c->query("select * FROM formation");
		echo '
			<div class="content col-12 col-m-12">
				<h3>Catalogues des formations</h3>
				<p>Retrouvez toutes nos formations ci dessous :</p>	
		';
		while ($ligne = $formations->fetch_assoc())
		{
		echo $ligne ['idformation']." - ".$ligne['libelle_formation']."</br>
		<p class=\"descri\">*".$ligne ['descriptif']."</p></br>";
		}
		echo'		
			</div>
		';
	}
?>