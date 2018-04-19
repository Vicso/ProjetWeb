<!DOCTYPE html>
<?php session_start();?>
<html>
	<head>
		<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="../menu.css" type="text/css" />
		<title>Boutique BDE Cesi Lyon</title>
	</head>
	<body>
<<<<<<< HEAD
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
=======
<?php
        if($_SESSION['id']==0)
        {
            echo '		
                <nav>
                <a href="index.html" id="home_button"><img src="../../images/home_button.png" id="home_button_img"></a> <!-- image avec un lien -->
                <ul>
                    <li class="nav_element"><a href="../evenements/evenement_a_venir.php">Evenements à venir</a> <!-- création d\'une liste avec un lien-->
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
                <ul>
                    <li class="nav_element"><a href="../inscription/sign_in.php">Connexion</a>
                    </li>
                </ul>
            </nav>';
        }
        
        else{
           echo '		
                <nav>
                <a href="index.html" id="home_button"><img src="../../images/home_button.png" id="home_button_img"></a> <!-- image avec un lien -->
                <ul>
                    <li class="nav_element"><a href="../evenements/evenement_a_venir.php">Evenements à venir</a> <!-- création d\'une liste avec un lien-->
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
                <ul>
                    <li class="nav_element"><a href="../inscription/sign_out.php">Deconnexion</a>
                    </li>
                </ul>
            </nav>';
        }
?>
>>>>>>> 247f60c67c966a566d56cf1f7bfa146455c09c4c
	<section id="left_menu">
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../images/facebook_logo.png"></a>
			<a href="https://twitter.com/cesi_sudest"><img src="../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../images/cesi_logo.png"></a>
	</section>
			
		<section id ="content">
			<h2> Evenements du mois </h2>
					<?php $reponse = $bdd->query('SELECT nom, description, dateevent, likeevent FROM evenement WHERE confirmation="1"');
					$donnees= $reponse->fetchall();
					$reponse2 = $bdd->query('SELECT COUNT(*) FROM evenement WHERE confirmation="1"');
					$tabmax = $reponse2->fetch();
					$varmax = $tabmax[0];
					$var = 0;
						while($var<$varmax)
							{
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