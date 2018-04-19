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

		$delete = $bdd->prepare('DELETE FROM acheter WHERE Id=:id_user');
		$delete->bindValue(':id_user', $id_user, PDO::PARAM_STR);
		$delete->execute();

		$reponse2_v = $bdd->query('SELECT COUNT(*) FROM goodies WHERE categorie="Vêtements"'); //On compte le nombre de lignes/articles
		$tabmax = $reponse2_v->fetch();
		$varmax = $tabmax[0];
		$compteur1 = 0;

		while ($compteur1<$varmax) {
			$vetement=$_POST['number_item_vetements'.$compteur1];
			$nom_goodie=$_POST['name_item_vetements'.$compteur1];
			$reponse_v = $bdd->query('SELECT Id FROM goodies WHERE nom="'.$nom_goodie.'"');
			$tab_goodie = $reponse_v->fetch();
			$id_goodie = $tab_goodie[0];
			$compteur1++;
			if ($vetement==0) {
				//On ne fait rien
			}
			else{
				$requete_v = $bdd->prepare('INSERT INTO acheter (Id, Id_Goodies, quantite) VALUES (:id, :id_goodie, :quantite)');
				$requete_v->bindValue(':id', $id_user, PDO::PARAM_STR);
				$requete_v->bindValue(':id_goodie', $id_goodie, PDO::PARAM_STR);
				$requete_v->bindValue(':quantite', $vetement, PDO::PARAM_STR);
				$requete_v->execute();
			}
		};
		$reponse2_v = $bdd->query('SELECT COUNT(*) FROM goodies WHERE categorie="Accessoires"'); //On compte le nombre de lignes/articles
		$tabmax = $reponse2_v->fetch();
		$varmax = $tabmax[0];
		$compteur1 = 0;
		while ($compteur1<$varmax) {
			$vetement=$_POST['number_item_accessoires'.$compteur1];
			$nom_goodie=$_POST['name_item_accessoires'.$compteur1];
			$reponse_v = $bdd->query('SELECT Id FROM goodies WHERE nom="'.$nom_goodie.'"');
			$tab_goodie = $reponse_v->fetch();
			$id_goodie = $tab_goodie[0];
			$compteur1++;
			if ($vetement==0) {
				//On ne fait rien
			}
			else{
				$requete_v = $bdd->prepare('INSERT INTO acheter (Id, Id_Goodies, quantite) VALUES (:id, :id_goodie, :quantite)');
				$requete_v->bindValue(':id', $id_user, PDO::PARAM_STR);
				$requete_v->bindValue(':id_goodie', $id_goodie, PDO::PARAM_STR);
				$requete_v->bindValue(':quantite', $vetement, PDO::PARAM_STR);
				$requete_v->execute();
			}
		};
		$reponse2_v = $bdd->query('SELECT COUNT(*) FROM goodies WHERE categorie="Alcoolisme"'); //On compte le nombre de lignes/articles
		$tabmax = $reponse2_v->fetch();
		$varmax = $tabmax[0];
		$compteur1 = 0;
		while ($compteur1<$varmax) {
			$vetement=$_POST['number_item_alcoolisme'.$compteur1];
			$nom_goodie=$_POST['name_item_alcoolisme'.$compteur1];
			$reponse_v = $bdd->query('SELECT Id FROM goodies WHERE nom="'.$nom_goodie.'"');
			$tab_goodie = $reponse_v->fetch();
			$id_goodie = $tab_goodie[0];
			$compteur1++;
			if ($vetement==0) {
				//On ne fait rien
			}
			else{
				$requete_v = $bdd->prepare('INSERT INTO acheter (Id, Id_Goodies, quantite) VALUES (:id, :id_goodie, :quantite)');
				$requete_v->bindValue(':id', $id_user, PDO::PARAM_STR);
				$requete_v->bindValue(':id_goodie', $id_goodie, PDO::PARAM_STR);
				$requete_v->bindValue(':quantite', $vetement, PDO::PARAM_STR);
				$requete_v->execute();
			}
		};
		?>
		<a href="./boutique.php">Revenir vers la boutique pour changer sa commande</a>
		<a href="./votre_panier.php">Consulter votre panier</a>
	</section>
</body>
</html>