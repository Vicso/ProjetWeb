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
			<section class="panier_content">
					<div class="title_panier_content"><h1>Votre panier</h1></div>
					<div class="panier_display">
						<?php 
						$reponse = $bdd->query('SELECT Id_Goodies FROM acheter WHERE quantite>0');
						$donnees= $reponse->fetchall();
						$reponse2 = $bdd->query('SELECT COUNT(*) FROM acheter WHERE quantite>0');
						$tabmax = $reponse2->fetch();
						$varmax = $tabmax[0];
						$var = 0;
						while($var<$varmax)
							{
								$requete_quantite = $bdd->query('SELECT quantite FROM acheter WHERE Id_Goodies = '.$donnees[$var][0].'');
								$donnee_quantite = $requete_quantite->fetch();
								$requete_nom = $bdd->query('SELECT nom FROM goodies WHERE Id ='.$donnees[$var][0].'');
								$nom = $requete_nom->fetch();
								echo  '<div class=panier_item>
								<p>'.$nom[0].'</p>
								<img src="../../images/facebook_logo.png">
								<p>Vous avez commandé <span class="red">'.$donnee_quantite[0].'</span> '.$nom[0].'</p>
								</div>';
								$var++;
							}?>
					</div>
					<hr>
			</section>
	</section>
</body>
</html>