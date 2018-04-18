<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title>Boutique BDE Cesi Lyon</title>
	<link rel="stylesheet" type="text/css" href="rap_contenders.php">
	<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="../../menu.css" type="text/css" />
	<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
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
		$id_user=$_SESSION['id'];
		$text_com=$_POST['com'];
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
		$requete1 = $bdd->prepare('INSERT INTO commentaire (textcom, ID_Evenement, Id_Users) VALUES (:com, :val, :id_users)');
		$requete1->bindValue(':com', $text_com, PDO::PARAM_STR);
		$requete1->bindValue(':val', $event, PDO::PARAM_STR);
		$requete1->bindValue(':id_user', $id_user, PDO::PARAM_STR);
		$requete1->execute();
		?>
		<p id="cible_result">Votre idée à bien été enregistré, vous pouvez aller la consulter dans l'onglet "Voter pour une idée"</p>
	</section>
</body>
</html>