<!DOCTYPE html>
<html>
	<head>
		<?php $bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');?>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="php" href="liason.php" type="text/php"/>
		<title>CESI BDE</title>
	</head>
	<body>
		<header>		
		</header>
			<h2>Evénements à venir</h2>
			<Section id ="content">
				<div>
				<div class="eventv">
					<div class ="imagevent">
						<img src="../images/ratz.jpg" class ="image"/>
					</div>
					<button class="button">S'inscrire</button>
					<div class="titrevent">
						<?php $reponse = $bdd->query('SELECT nom FROM evenement WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['nom'].'</p>';
							} 
							$reponse->closeCursor(); ?> 
					</div>
					<div class ="datevent">
						<?php $reponse = $bdd->query('SELECT dateevent FROM evenement WHERE Id=1');
						while($donnees = $reponse->fetch())
							{
						 echo  '<p>'.$donnees['dateevent'].'</p>';
							} 
							$reponse->closeCursor(); ?>
					</div>
					<div class="descriptionevent">
					<hr/>
					<?php $reponse = $bdd->query('SELECT description FROM evenement WHERE Id=1');
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