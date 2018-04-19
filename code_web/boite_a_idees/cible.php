<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title>Boutique BDE Cesi Lyon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../menu.css">
	<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
	<meta charset="UTF-8">
</head>
<body>
<<<<<<< HEAD
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
	<section class="main_content">
		<?php
		$id_user=$_SESSION['id'];
		$titre_idee=$_POST['titre_idee']; //On donne à titre_idee la valeur du champs titre_idee de la page proposer_idee.php, on fait de même pour la description et la date
		$description=$_POST['description'];
		$date_event=$_POST['date_event'];
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
		$requete1 = $bdd->prepare('INSERT INTO evenement (nom, dateevent, description, Id_Users) VALUES (:titre_idee, :date_event, :description, :id_user)'); //Cette requête crée notre idée à partir des infos fournient précédemment
		$requete1->bindValue(':titre_idee', $titre_idee, PDO::PARAM_STR); //On donne les valeurs de nos champs à remplir dans la requête
		$requete1->bindValue(':date_event', $date_event, PDO::PARAM_STR);
		$requete1->bindValue(':description', $description, PDO::PARAM_STR);
		$requete1->bindValue(':id_user', $id_user, PDO::PARAM_STR);
		$requete1->execute(); //On exec la requête
		?>
		<p id="cible_result">Votre idée à bien été enregistré, vous pouvez aller la consulter dans l'onglet "Voter pour une idée"</p> <!-- Une simple phrase confirmant le bon fonctionnement de sa demande à l'utilisateur -->
	</section>
</body>
</html>

