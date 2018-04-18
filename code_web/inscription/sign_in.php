<!DOCTYPE html>

<?php  
session_start();
include("Connect.php"); 

if(!isset($_POST['mail'],$_POST['mdp'])){
echo '<html>
        <head>
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="stylesheet" href="../menu.css" type="text/css" />
            <link rel="stylesheet" href="../inscription/style.css" type="text/css"/>
            <title>Connexion BDE Cesi Lyon</title>
        </head>
        <body>
 

            <Section id ="content">
                    <div class="eventv">
                        <div class="contact-form1">
                            <div class="contact-w3-agileits">
                                    <h3>Connexion</h3>
                                    <form action="#" method="post">
                                        <div class="form-sub-w3ls">
                                            <input placeholder="email" class="mail" type="email" name="mail" required="">
                                            <div class="icon-agile">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="form-sub-w3ls">
                                            <input placeholder="mot de passe"  type="password" name="mdp" required="">
                                            <div class="icon-agile">
                                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    <a href="sign_up.php"><h3>Pas encore inscrit ?</h3></a>
                               <div class="submit-w3l">
                                    <input type="submit" value="Connexion">
                                </div>
                            </form>
                        </div>	
                    </div>
                </div>
            </Section>
        </body>
    </html>';}
else
{
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];        
    $query=$db->prepare('SELECT id FROM users WHERE mail=:mail AND mdp=:mdp');
    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
    $query->execute();
    $donnees = $query->fetch();
    
    if(!$donnees['id'])
    {
        echo '<html>
            <head>
                <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
                <link rel="stylesheet" href="../inscription/style.css" type="text/css"/>
                <title>Connexion BDE Cesi Lyon</title>
            </head>
            <body>
                <Section id ="content">
                        <div class="eventv">
                            <div class="contact-form1">
                                <div class="contact-w3-agileits">
                                        <h3>Connexion</h3>
                                        <form action="#" method="post">
                                            <div class="form-sub-w3ls">
                                                <input placeholder="email" class="mail" type="email" name="mail" required="">
                                                <div class="icon-agile">
                                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="form-sub-w3ls">
                                                <input placeholder="mot de passe"  type="password" name="mdp" required="">
                                                <div class="icon-agile">
                                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        <a href="sign_up.php"><h3>Pas encore inscrit ?</h3></a>
                                   <div class="submit-w3l">
                                        <input type="submit" value="Connexion">
                                    </div>
                                </form>
                            </div>	
                        </div>
                    </div>
                </Section>
                <script> alert("Email ou mot de passe non valide")</script>
            </body>
        </html>';}   
    else
    {
    $_SESSION['id']=$donnees['id'];
    $query->CloseCursor();
        
    $id = $_SESSION['id'];
    $query=$db->prepare('SELECT nom,prenom FROM users WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    $donnees = $query->fetch();
    $_SESSION['prenom'] = $donnees['prenom'];
    $_SESSION['nom'] = $donnees['nom'];
    $query->CloseCursor();

    echo '<html>
            <head>
                <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
                <link rel="stylesheet" href="../inscription/style.css" type="text/css"/>
                <title>Connexion BDE Cesi Lyon</title>
            </head>
            <body>

                <Section id ="content">
                    <div>
                        <div class="eventv">
                            <div class="contact-form1">
                                <div class="contact-w3-agileits">
                                <h3>Connexion Effectuée</h3>
                                <h3>Bienvenue '.$_SESSION['prenom'].' '.$_SESSION['nom'].'</h3>
                                </div>
                            </div>	
                        </div>
                    </div>
                    <script>setTimeout("location.href = \'../Accueil/accueil.php\';",2000);</script>;
                </Section>
            </body>
        </html>'; }
    }
?>