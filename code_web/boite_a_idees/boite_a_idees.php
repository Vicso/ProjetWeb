<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>Boutique BDE Cesi Lyon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../menu.css">
	<meta charset="UTF-8">
</head>
<body>

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
	<section id="left_menu">
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../images/facebook_logo.png"></a>
			<a href="https://twitter.com/cesi_sudest"><img src="../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../images/cesi_logo.png"></a>
	</section>
	<section class="main_content">
		<div id="content">
			<div id="proposer_idee"><!-- Le lien vers la page proposer_idee.php -->
				<a href="./proposer_idee"><p>Proposer une  nouvelle idée</br></br>Vous avez une idée de soirée à proposer ? Vous voulez que le BDE fasse une sortie pédalo, grosse beuverie ou un camping nudiste ? Et bien c'est ici que vous pouvez proposer des idées !</p></a>
			</div>
			<div id="voter_idee"> <!-- Le lien vers la page voter_idee.php -->
				<a href="./voter_idee"><p>Voter pour une idée déjà existante</br></br>Vous voulez voir et juger les idées déjà proposé ? C'est par ici. Découvrez les idées de vos ami(e)s et choisissez les meilleurs ! Ou choisissez juste celles qui proposent des boissons de type alcoolisée...</p></a>
			</div>
		</div>
		
	</section>
</body>
</html>