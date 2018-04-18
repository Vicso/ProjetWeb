<!DOCTYPE html>
<html>
<head>
	<title>Boutique BDE Cesi Lyon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../menu.css">
	<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
	<meta charset="UTF-8">
</head>
<body>
	<nav> <!-- Ici nous avons dans la balise nav le menu de navigation du haut, avec tous les liens des pages de notre site. Le CSS de tous les éléments menu est dans menu.css -->
		<a href="index.html" id="home_button"><img src="../../images/home_button.png" id="home_button_img"></a>
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
				<ul class="submenu"> <!-- Ici nous avons le sous-menu de boîte à idée -->
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
	<section id="left_menu"> <!-- Ici nous avons le menu "réseaux" avec des images liens clickables menant tous sur une destination en rapport avec le BDE cesi Lyon/France -->
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../images/facebook_logo.png"></a>
			<a href="https://twitter.com/cesi_sudest"><img src="../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../images/cesi_logo.png"></a>
	</section>
	<section class="main_content"> <!-- Le main content est comme son nom l'indique le contenu principal -->
			<?php 
				$reponse = $bdd->query('SELECT nom, description FROM evenement WHERE confirmation="0"'); //Ici nous récupérons tous les événements qui n'ont pas encore été confirmé par un membre du BDE
				$donnees= $reponse->fetchall();
				$reponse2 = $bdd->query('SELECT COUNT(*) FROM evenement WHERE confirmation="0"');//On récupère le nombre d'entrées
				$tabmax = $reponse2->fetch();
				$varmax = $tabmax[0];
				$var = 0; //On initialise notre compteur
				while($var<$varmax) //Tant que nous n'avons pas parcouru la totalité des lignes on ne sort pas du while
					{
						echo  '<div class=idea_item>
						<p class="idea_title">'.$donnees[$var][0].'</p>
						<p>'.$donnees[$var][1].'</p>
						<input type="button" value="Like"></div>';
						$var++; //Dans cette boucle nous créons notre page en la remplissant des informations récupérées précédemment 
					}?>
	</section>
</body>
</html>