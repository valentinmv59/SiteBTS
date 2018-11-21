<?php
	function p_assos(){
		echo '	
			<div class="reel col-12 col-m-12">
				<h3>Complétez le formulaire</h3>
				<form action="index.php?page=p_base" method="POST">
					<label for="nom_assos">Nom de votre association :</label>
						<input type="text" name="nom_assos" placeholder="Tokyo Ghouls" required><br>
					<label for="num_icom">Numéro ICOM :</label>
						<input type="number" name="num_icom" placeholder="223423546" required><br>

					<h4>Votre interlocuteur</h4>	
						
					<label for="nom_dir">Votre nom :</label>
						<input type="text" name="nom_dir" placeholder="Kaneki" required><br>
					<label for="prenom_dir">Votre prénom :</label>
						<input type="text" name="prenom_dir" placeholder="Ken" required><br>
					<label for="ville">Votre ville :</label>
						<input type="text" name="ville" placeholder="Tokyo" required><br>
					<label for="email">Votre email :</label>
						<input type="mail" name="email" placeholder="ken@ghouls-org.void" required><br>
					<label for="password">Votre mot de passe :</label>
						<input type="password" name="password" placeholder="+-+-+-+-+-+-+-+" required><br>
					
					<h5>Téléphonie</h5>

					<label for="tel">Votre tel :</label>
						<input type="tel" name="tel" placeholder="virtual call center"><br>
					<label for="fax">Votre fax :</label>
						<input type="tel" name="fax" placeholder="virtual fax center">

					<input type="submit" value="Valider" name="inscri_assos">
				</form>		
			</div>
		';
	}
?>