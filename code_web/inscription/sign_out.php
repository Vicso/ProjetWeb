<?php
session_start();
session_destroy();
$titre="Déconnexion";

    echo '<html>
            <head>
                <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
                <link rel="stylesheet" href="../inscription/style.css" type="text/css"/>
                <title>Connexion BDE Cesi Lyon</title>
            </head>
            <body>
             <div>
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
                    <ul>
                        <li class="nav_element">
                        <a href="../inscription/sign_out.php">
                            Déconnexion
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
            
               <Section id ="content">
                    <div>
                        <div class="eventv">
                            <div class="contact-form1">
                                <div class="contact-w3-agileits">
                                <h3>Deconnexion effectuée</h3>
                                <a href="sign_in.php"><h3>Revenir à la page de connexion</h3></a>
                            </div>	
                        </div>
                    </div>
                </Section>
            </body>
        </html>';



?>
