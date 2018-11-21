<?php
	function p_admin(){
		$c = co();
		$domaines = $c->query("select * FROM domaine");
		$formations = $c->query("select * FROM formation");
		echo '
			<div class="content col-12 col-m-12">
				<h3>Administration</h3>
				<p>Cliquez <a href="index.php?page=p_profil&deco=1">ici</a> pour vous déconnecter</p>
				<h4>Ajouter une formation</h4>
				<form action="index.php?page=p_base" method="POST">
					<label for="titre">Intitulé de la formation : </label>
						<input type="text" name="titre" placeholder="The Chicken Suprémacy" required><br>
					<label for="description">Description de la formation : </label><br>
						<textarea name="description" placeholder="Soul eater" rows="4" cols="52"></textarea><br>
					<label for="dure">Durée de la formation : </label>
						<input type="number" name="duree" placeholder="01 heure" required><br>	
					<label for="stag_min">Stagiaires minimun</label>
						<input type="number" name="stag_min" placeholder="08" required><br>
					<label for="stag_max">Stagiaires maximun</label>
						<input type="number" name="stag_max" placeholder="16" required><br>
					<label for="domaine">Selectionnez un domaine</label>
						<select name="domaine">';

					while ($ligne = $domaines->fetch_assoc())
					{
					echo '<option value="'.$ligne['iddomaine'].'">'.$ligne['libelle_dom'].'</option>';
					}

		echo 			' 	</select>
					<input type="submit" value="Valider" name="formation_admin">
				</form>	
		';
		echo'		
				<h4>Ajouter une session</h4>
				<form action="index.php?page=p_base" method="POST">
					<label for="date_debut">Date de début : </label>
						<input type="date" name="date_debut" placeholder="Godlike" required><br>
					<label for="heure_debut">Heure de début : </label>
						<input type="time" name="heure_debut" placeholder="Godlike" required><br>
					<label for="lieu">Lieu : </label>
						<input type="text" name="lieu" placeholder="Godlike" required><br>
					<label for="formation_idformation">Selectionnez un formation</label>
						<select name="formation">
				</form>
			</div>
		';
	}
?>