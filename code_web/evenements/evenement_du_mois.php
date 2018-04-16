<!DOCTYPE html>
<html>
	<head>
		<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="../menu.css" type="text/css" />
		<title>Boutique BDE Cesi Lyon</title>
	</head>
	<body>
		<nav>
			<a href="index.html" id="home_button"><img src="../../images/home_button.png" id="home_button_img"></a>
			<ul>
				<li class="nav_element"><a href="../boite_a_idees/boite_a_idees.php">Boîte à idées</a>
					<ul class="submenu">
						<li><a href="../boite_a_idees/proposer_idee.php">Proposer une idée</a></li>
						<li><a href="../boite_a_idees/voter_idee.php">Voter pour une idée</a></li>
					</ul>
				</li>
			</ul>
			<ul>
				<li class="nav_element"><a href="../evenements/evenement_a_venir.php">Evenements à venir</a>
				</li>
			</ul>
			<ul>
				<li class="nav_element"><a href="../evenements/evenement_du_mois.php">Evenements du mois</a>
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
			
		<Section id ="content">
			<h2>Evénements du mois</h2>  
			<div>
				<div class="eventv">
					<div class ="imagevent">
						<img src="../../images/beerpong.png" class ="image"/>
					</div>
					<button class="button">Like</button>
					<div class="titrevent">
						<?php $reponse = $bdd->query('SELECT nom FROM evenement WHERE Id=2');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['nom'].'</p>';
							} 
							$reponse->closeCursor(); ?> 
					</div>
					<div class ="datevent">
						<?php $reponse = $bdd->query('SELECT dateevent FROM evenement WHERE Id=2');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['dateevent'].'</p>';
							} 
							$reponse->closeCursor(); ?>
					</div>
					<div class="descriptionevent">
					<hr/>
					<?php $reponse = $bdd->query('SELECT description FROM evenement WHERE Id=2');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['description'].'</p>';
							} 
							$reponse->closeCursor(); ?>
					</div>
				</div>
				</div>
			</Section>
	</body>
</html>