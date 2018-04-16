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
	<nav>
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
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../images/facebook_logo.png"></a>
			<a href="https://twitter.com/cesi_sudest"><img src="../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../images/cesi_logo.png"></a>
	</section>
	<section class="main_content">
		<section class="boutique_content">
			<div class="title_boutique"><h1>Vêtements</h1></div>
			<div class="boutique_display">
				<div class="boutique_item">
					<?php $reponse = $bdd->query('SELECT nom FROM goodies WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['nom'].'</p>';
							} 
							$reponse->closeCursor(); ?>
					<img src="../../images/hoodieBDE.jpg">
				</div>
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
			</div>
		</section>
		<section class="boutique_content">
			<div class="title_boutique"><h1>Accessoires</h1></div>
			<div class="boutique_display">
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
			</div>
		</section>
		<section class="boutique_content">
			<div class="title_boutique"><h1>Alcoolisme</h1></div>
			<div class="boutique_display">
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
				<div class="boutique_item">
					<p>Premier objet</p>
					<img src="../../images/facebook_logo.png">
				</div>
			</div>
		</section>
	</section>

</body>
</html>