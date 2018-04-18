<!DOCTYPE html>
<?php session_start(); ?>
<?php $event = 1 ; ?>


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
			<?php 	  
					$reponse = $bdd->prepare('SELECT nom, description, dateevent FROM evenement WHERE id=:val and confirmation=:val');
					$reponse->bindValue(':val', $event, PDO::PARAM_STR);
					$reponse->execute();
					$donnees= $reponse->fetchall();
					$reponse2 = $bdd->prepare('SELECT COUNT(*) FROM evenement WHERE id=:val and confirmation=:val');
					$reponse2->bindValue(':val', $event, PDO::PARAM_STR);
					$reponse2->execute();
					$tabmax = $reponse2->fetch();
					$varmax = $tabmax[0];
					$var = 0;
					
						while($var<$varmax)
							{
								echo  
									'<div class="event">
									<div class="titrevent"><h2>'.$donnees[$var][0].'</h2></div>
									<div class="imagevent"><img src="../../../images/beerpong.png" class="image"></div>
									<div class="datevent">'.$donnees[$var][2].'</div>
									<div class="descriptionevent">'.$donnees[$var][1].'</div>
									</div>';
								$var++;
							}?>
		
		
			<h2> Commentaires </h2>
				<?php $reponse = $bdd->query('SELECT nom, likecom, textcom FROM users INNER JOIN commentaires ON users.Id = commentaires.Id_Users');
					$donnees= $reponse->fetchall();
					$reponse2 = $bdd->prepare('SELECT COUNT(*) FROM commentaires WHERE id_evenement=:val');
					$reponse2->bindValue(':val', $event, PDO::PARAM_STR);
					$reponse2->execute();
					$tabmax = $reponse2->fetch();
					$varmax = $tabmax[0];
					$var = 0;
						while($var<$varmax)
							{
								echo  
									'<div class="com">
									<div class="imageusers"><img src="../../../images/beerpong.png" class="image"></div>
									<div class=nomusers><h3>'.$donnees[$var][0].'</h3></div>
									<div class="textcom">'.$donnees[$var][2].'</div>
									<div class=likecom>'.$donnees[$var][1].'</div>
									</div>';
								$var++;
							}?>
				<div class="combar">
				<form action="cible.php" method="post" enctype="multipart/form-data">
					<input class="champ" type="text" value="Tapez votre commentaire ici ... " name="com">
					<input type="submit" name="Envoyer">

				</form>
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