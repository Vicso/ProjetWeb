<!DOCTYPE html>
<?php session_start();?> <!--  session de connexion utilisateur-->
<html>
	<head>
		<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?> <!-- liaison avec la base de données -->
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css" type="text/css" /> <!-- liaison avec le fichier css de la page -->
		<link rel="stylesheet" href="../menu.css" type="text/css" /> <!-- liaison avec le fichier css de la barre de navigation -->
		<title>Boutique BDE Cesi Lyon</title>
	</head>
	<body>
		<!-- barre de navigation -->
		<nav>
		<a href="index.html" id="home_button"><img src="../../images/home_button.png" id="home_button_img"></a> <!-- image avec un lien -->
		<ul>
			<li class="nav_element"><a href="../evenements/evenement_a_venir.php">Evenements à venir</a> <!-- création d'une liste avec un lien -->
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
			<li class="nav_element"><a href="../contact/contact.php">Contactez nous</a>
			</li>
		</ul>
		</nav>
		<section id="left_menu">
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../images/facebook_logo.png"></a> <!-- image avec un lien -->
			<a href="https://twitter.com/cesi_sudest"><img src="../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../images/cesi_logo.png"></a>
		</section>
			
		<!-- corps de la page -->	
		<section id ="content">
			<h2> Evenements à venir </h2> <!-- titre -->
			<?php $reponse = $bdd->query('SELECT nom, description, dateevent FROM evenement WHERE confirmation="1"'); // requête vers la table evenement 
				$donnees= $reponse->fetchall(); // variable donnees prends la valeur de toute la reponse de la requête
				$reponse2 = $bdd->query('SELECT COUNT(*) FROM evenement WHERE confirmation="1"'); // on compte le nombre de lignes 
				$tabmax = $reponse2->fetch(); 
				$varmax = $tabmax[0]; //definition d'un tableau pour stocker la reponse de la requête 
				$var = 0; // initialisation d'une variable a 0
				while($var<$varmax) //ouverture d'une boucle while
					{
						//affiche des valeurs récupérées par les requêtes
					echo  '<div class="eventv"> 																
							<div class="imagevent"><img src="../../images/beerpong.png" class="image"></div>
							<button class="button">S\'inscrire</button>
							<div class="titrevent"><p>'.$donnees[$var][0].'</p></div>
							<div class="datevent"><p>'.$donnees[$var][2].'</p></div>
							<div class="descriptionevent"><hr><p>'.$donnees[$var][1].'</p></div>
							</div>';
							$var++;
					}?>
		</section>
	</body>
</html>