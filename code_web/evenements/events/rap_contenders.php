<!DOCTYPE html>
<html>
	<head>
		<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="../../menu.css" type="text/css" />
		<title>Boutique BDE Cesi Lyon</title>
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
			
		<Section id ="content">
			<div class="titreevent">
				<?php $reponse = $bdd->query('SELECT nom FROM evenement WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<h2>'.$donnees['nom'].'</h2>';
							} 
							$reponse->closeCursor(); ?>
			</div>
			<div class="imageevent">
				<img src="../../../images/beerpong.png" class ="image"/>
			</div>
				<div class="dateevent">
				<?php $reponse = $bdd->query('SELECT dateevent FROM evenement WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['dateevent'].'</p>';
							} 
							$reponse->closeCursor(); ?>
			</div>
			<div class="descriptionevent">
				<?php $reponse = $bdd->query('SELECT description FROM evenement WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['description'].'</p>';
							} 
							$reponse->closeCursor(); ?>
			</div>
			<h2> Commentaires </h2>
			<div class="commentaire">
				<div class ="imgcom">
					<img src="">
				</div>
				<div>
						<?php $reponse = $bdd->query('SELECT likecom FROM commentaires WHERE id=1');
							while($donnees= $reponse->fetch())
							{
								echo '<button class="button">'.'Like '.$donnees['likecom'].'</button>';
							}
							$reponse->closeCursor(); ?>
				<div class="username">
					<?php $reponse = $bdd->query('SELECT nom FROM users WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<h3>'.$donnees['nom'].'</h3>';
							} 
							$reponse->closeCursor(); ?>
				</div>
				<div class="usercom">
					<?php $reponse = $bdd->query('SELECT textcom FROM commentaires WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['textcom'].'</p>';
							} 
							$reponse->closeCursor(); ?>
				</div>
				<h2> Photos </h2>
				<div class="postimg">
					<img src="">
				</div>
				<div class="postimg">
					<img src="">
				</div>
				<div class="postimg">
					<img src=""/>
				</div>
				<div class="postimg">
					<img src="">
				</div>




			</Section>
	</body>
</html>