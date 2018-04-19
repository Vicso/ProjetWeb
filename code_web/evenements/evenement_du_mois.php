<!DOCTYPE html>
<?php session_start();?> <!--  session de connexion utilisateur -->
<html>
	<head>
		<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?> <!-- liaison à la BDD -->
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css" type="text/css" /> <!--  lien vers le fichier css de la page-->
		<link rel="stylesheet" href="../menu.css" type="text/css" /> <!-- lien vers le fichier css de la barre de navigation -->
		<title>Boutique BDE Cesi Lyon</title>
	</head>
	<body>
		<nav>
		<a href="../Accueil/accueil.php" id="home_button"><img src="../../images/home_button.png" id="home_button_img"></a> <!-- image avec un lien -->
		<ul>
			<li class="nav_element"><a href="../evenements/evenement_a_venir.php">Evenements à venir</a> <!-- création d'une liste avec un lien-->
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
	</nav>
	<section id="left_menu">
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../images/facebook_logo.png"></a>
			<a href="https://twitter.com/cesi_sudest"><img src="../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../images/cesi_logo.png"></a>
	</section>
		<!-- corps de la page -->	
		<section id ="content">
			<h2> Evenements du mois </h2> <!-- titre -->
					<?php $reponse = $bdd->query('SELECT nom, description, dateevent, likeevent FROM evenement WHERE confirmation="1"'); //requete vers la BDD sur la table event
					$donnees= $reponse->fetchall(); // variable donnee prends la valeur de la reponse de la requête
					$reponse2 = $bdd->query('SELECT COUNT(*) FROM evenement WHERE confirmation="1"');
					$tabmax = $reponse2->fetch();
					$varmax = $tabmax[0]; // definition dun tableau
					$var = 0; //initialisatin d'une variable a 0 
						while($var<$varmax) // ouverture d'une boucle while
							{
								// affichage des valeurs récupérée dans la requête
								echo '<a href="events/rap_contenders"/><div class="eventv">
									<div class="imagevent"><img src="../../images/beerpong.png" class="image"></div>
									<button class="button">Like '.$donnees[$var][3].'</button>
									<div class="titrevent"><p>'.$donnees[$var][0].'</p></div>
									<div class="datevent"><p>'.$donnees[$var][2].'</p></div>
									<div class="descriptionevent"><hr><p>'.$donnees[$var][1].'</p></div>
								</div>';
								$var++;
							}?>
			</section>  	
	</body>
</html>