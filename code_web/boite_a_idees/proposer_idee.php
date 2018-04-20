<!DOCTYPE html>
<?php session_start();?>
<html>
<?php
	if ($_SESSION['id']==0) {
		while (true) {
		}
	}
?>
<head>
	<title>Boutique BDE Cesi Lyon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../menu.css">
	<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
	<meta charset="UTF-8">
</head>
<body>
	<nav> <!-- CF voter_idee.php -->
		<a href="../Accueil/accueil.php" id="home_button"><img src="../../images/home_button.png" id="home_button_img"></a>
		<ul>
			<li class="nav_element"><a href="../evenements/evenement_a_venir.php">Evenements à venir</a>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../evenements/evenement_du_mois.php">Evenements du mois</a>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../boite_a_idees/boite_a_idees.php">Boîte à idées</a>
				<ul class="submenu">
					<li><a href="../boite_a_idees/proposer_idee.php">Proposer une idée</a></li>
					<li><a href="../boite_a_idees/voter_idee.php">Voter pour une idée</a></li>
				</ul>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../boutique/boutique.php">Boutique</a>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../boutique/votre_panier.php">Panier</a>
			</li>
		</ul>
		<ul>
			<li class="compte"><?php echo '<p> Connecté en tant que : '. $_SESSION['prenom'].'</p>'?>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../inscription/sign_out.php">Deconnexion</a>
			</li>
		</ul>
	</nav>
	<section id="left_menu">
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../images/facebook_logo.png"></a>
			<a href="https://twitter.com/cesi_sudest"><img src="../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../images/cesi_logo.png"></a>
	</section>
	<section class="main_content">	
		<h2> Proposez donc une idée !</h2>	
		<form action="cible.php" method="post" enctype="multipart/form-data"> <!-- Ici on crée le formulaire qui permet de proposer des idées -->

			<div class="nomidee"><p>Le nom de votre idée: </p>
			<input type="text" name="titre_idee" ></div> <!-- Ici on récupère le titre -->
			<div class="textarea"><p>La description de votre idée: </p>
			<textarea name="description" rows="8" cols="60" ></textarea></div> <!-- On prend un textarea pour la description car elle peut être très longue -->
			<div class="datevent"><p>La date à laquelle vous aimeriez faire votre événement</p>
			<input type="date" name="date_event"></div> <!-- Ici on récupère la date -->
			<div  class="button"><p>C'est bon ?</p>
			<input type="submit" name="valider"></div> <!-- Bouton validation -->

		</form>

	</section>
</body>
</html>