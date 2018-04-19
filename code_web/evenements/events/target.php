<!DOCTYPE html>
<?php session_start();?> <!-- creation de la session utilisateur -->
<html>
<head>
	<title>Boutique BDE Cesi Lyon</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="../../menu.css" type="text/css" />
	<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?> <!-- liaison a la BDD-->
	<?php $event=$_GET["var"] ?> <!-- récuperation de la variable $event-->
	<meta charset="UTF-8">
</head>
<body>
		<nav>
		<a href="index.html" id="home_button"><img src="../../../images/home_button.png" id="home_button_img"></a>
		<ul>
			<li class="nav_element"><a href="../evenement_a_venir.php">Evenements à venir</a>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../evenement_du_mois.php">Evenements du mois</a>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../../boite_a_idees/boite_a_idees.php">Boîte à idées</a>
				<ul class="submenu">
					<li><a href="../../boite_a_idees/proposer_idee.php">Proposer une idée</a></li>
					<li><a href="../../boite_a_idees/voter_idee.php">Voter pour une idée</a></li>
				</ul>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../../boutique/boutique.php">Boutique</a>
			</li>
		</ul>
		<ul>
			<li class="nav_element"><a href="../../contact/contact.php">Contactez nous</a>
			</li>
		</ul>
	</nav>
	<section id="left_menu">
			<a href="https://www.facebook.com/BDECesiLyon"><img src="../../../images/facebook_logo.png"></a>
			<a href="https://twitter.com/cesi_sudest"><img src="../../../images/twitter_logo.png"></a>
			<a href="https://www.youtube.com/watch?v=IyIDO3sI4Hw"><img src="../../../images/youtube_logo.png">
			<a href="https://vimeo.com/252150044"><img src="../../../images/vimeo_logo.png"></a>
			<a href="https://fr.linkedin.com/company/groupe-cesi"><img src="../../../images/linkedin_logo.png"></a>
			<a href="https://www.cesi.fr/"><img src="../../../images/cesi_logo.png"></a>
	</section>
			
	<section class="main_content">
		<?php 
		$id_user=$_SESSION['id']; // recuperation de l'id de l'utilisateur
		$text_com=$_POST['text_com']; // la variable text_com prends la valeur du champ 'text_com'
		$event=$_POST['event'];
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
		$requete1 = $bdd->prepare('INSERT INTO commentaires (textcom, Id_Evenement, Id_Users) VALUES (:text_com, :event, :id_user)'); // requete vers la BDD pour stocker le commentaire
		$requete1->bindValue(':text_com', $text_com, PDO::PARAM_STR); //biding des variables
		$requete1->bindValue(':event', $event, PDO::PARAM_STR);
		$requete1->bindValue(':id_user', $id_user, PDO::PARAM_STR);
		$requete1->execute();
		?>

		<?php
  			header("Location: event.php?var=".$event);
  			exit(); ?>
	</section>
</body>
</html>