<?php
session_start();
session_destroy(); /*On détruit la session contenant les informations de la personne connectée*/
$titre="Déconnexion";

    echo '<html>
            <head>
                <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
                <link rel="stylesheet" href="../menu.css" type="text/css" />
                <link rel="stylesheet" href="../inscription/style.css" type="text/css"/>
                <title>Connexion BDE Cesi Lyon</title>
            </head>
            <body>
            
               <Section id ="content">
                    <div>
                        <div class="eventv">
                            <div class="contact-form1">
                                <div class="contact-w3-agileits">
                                <h3>Deconnexion effectuée</h3>
                                <a href="sign_in.php"><h3>Revenir à la page de connexion</h3></a>
                                <script>setTimeout("location.href = \'sign_in.php\';",2000);</script>;
                            </div>	
                        </div>
                    </div>
                </Section>
            </body>
        </html>';



?>
