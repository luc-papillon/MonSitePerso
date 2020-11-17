<html>
	
		<head>
		<meta charset="UTF_8">
		<title>Mon Site Web</title>
		<link rel="stylesheet" href="site.css"/>
		
	</head>
	<body>
			<div class="barre">
				<ul>
					<li><a href="monsite.php">Accueil</a></li>
					<li><a href="competence.php">Mes Compétences</a></li>
					<li><a href="experience.php">Expériences</a></li>
					<li><a href="apropos.php">A propos</a></li>
					<li><a href="contact.php">Me Contacter</a></li>
					<li><h2>PAPILLON <br/> LUC</h2></li>
					<li><a href="connecte.php">Se Connecter</a></li>
				</ul>
			</div>
	

				<h1 class="titre">connexion</h1>
				
				<form name="auth" method="POST" action="form.php" >
	<fieldset>
		<legend>Identification</legend>
		<table border="0">
						<tr>
							<td><label>Email :</label></td>
							<td><input type="text" name="email" /></td>
						</tr>
						<tr>
							<td><label>Mot de passe :</label></td>
							<td><input type="password" name="mdp" /></td>
						</tr>
						<tr>
							<td class="bouton"></td>
							<td class="bouton"><input type="submit" name="Valider" /><input type="reset" name="Annuler" /></td>
						</tr>
							<?php

								if(isset($_GET['log']))
								{
									echo "<h2>Erreur d'authentification : Veuillez rentrer à nouveau votre login et votre mot de passe !</h2>";
								}	
							?>
		</table>
	</fieldset>
</form>
			
<br/>	

		<h3>Pas encore inscrit?</h3>
			<form action="juzely.php" method="post" >
			<label for="prenom"> Prénom </label></br>
			<input type="text" name="prenom"/> <br>
			
			<label for="nom"> Nom de famille </label> </BR>
			<input type="text" name="nom"/> </br>
			
			<label for="dateNaiss"> Date de naissance </label> </br>
			<input type="date" name="dateNaiss"/> <br/>
			
			
			<label for="adCP"> Code Postal </label> </br>
			<input type="text" name="adCP"/></br>
				
			<label for="adVille"> Ville </label> </br>
			<input type="text" name="adVille"/> </br>
			
			<label for="Sexe"> Sexe </label> </br>
			<input type="radio" name="Sexe" value="H"/> H <br/>
			<input type="radio" name="Sexe" value="F" />F<br/>
			<input type="radio" name="Sexe" value="N"/> Ne pas préciser<br/>
			
			<label for="adresseMel"> Adresse mail </label> </br>
			<input type="mail" name="adresseMel"/><br/>
			
			<label for="mdp">mot de passe :</label><br/>
			<input type="password"  name="mdp"><br/>
			
			<input type="submit" name="Valider" />
		</form>
	
		
	<br/>
			<footer>
	
			</footer>
	</body>

</html>