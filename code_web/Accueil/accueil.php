<!DOCTYPE html>

<?php  
session_start();
if(!isset ($_SESSION['id'])){$_SESSION['id'] = 0;}
include("../inscription/Connect.php"); 

?>

<!-- Accueil du site après la connexion-->
<html>
	<head>
		<title>Accueil BDE lyon</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../Accueil/style.css" />
	</head>

        <body>
<<<<<<< HEAD
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
=======
         
            <H1>Bonjour jeune Césien</H1>
            <a href='../boite_a_idees/boite_a_idees.php'>
            <div class="content">
                <div>
                <img src="../../images/facebook_logo.png" >
                <H3>Boite à idées</H3>
                </div>
>>>>>>> 247f60c67c966a566d56cf1f7bfa146455c09c4c
            </div>
            </a>      
            <a  href='../boutique/boutique.php'>                 
            <div class="content2"'>
                <div>
                <img src="../../images/facebook_logo.png" >
                <H3>Boutique</H3>
                </div>
            </div>
            </a>
    
           <a href='../evenements/evenement_a_venir.php'>
            <div class="content">
                <div>
                <img src="../../images/facebook_logo.png" >
                <H3>Evenements à venir</H3>
                </div>
            </div>
            </a>
            <a href='../evenements/evenement_du_mois.php'>
            <div class="content2">
                <div>
                <img src="../../images/facebook_logo.png" >
                <H3>Evenements du mois</H3>
                </div>
            </div>
            </a>
        </body>
</html>
							
