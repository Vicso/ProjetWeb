<!DOCTYPE html>

<?php  
session_start();
include("../inscription/Connect.php"); 

?>

<!-- Accueil du site après la connexion-->
<html>
	<head>
		<title>Accueil BDE lyon</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
	</head>

        <body>
           <div class="titre_accueil">
               <h1>Bienvenue jeune Césien</h1>
           </div>
           <div class="content">
               <a href="../evenements/evenement_a_venir.php"><div class="link_menu">
                   <p>Evénements à venir</p>
               </div></a>
               <a href="../evenements/evenement_du_mois.php"><div class="link_menu">
                   <p>Evénements du mois</p>
               </div></a>
               <a href="../boite_a_idees/boite_a_idees.php""><div class="link_menu">
                   <p>Boîte à idées</p>
               </div></a>
               <a href="../boutique/boutique.php"><div class="link_menu">
                   <p>Boutique</p>
               </div></a>
            </div>
        </body>
</html>
							
