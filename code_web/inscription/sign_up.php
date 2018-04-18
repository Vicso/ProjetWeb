<!DOCTYPE html>

<?php  
session_start();
include("Connect.php"); 
?>

<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../evenements/style.css" type="text/css" />
        <link rel="stylesheet" href="../inscription/style.css" type="text/css"/>
		<title>Inscription BDE Cesi Lyon</title>
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
		</nav>
    </div>
        
		<Section id ="content">
			<div>
				<div class="eventv">
					<div class="contact-form1">
				        <div class="contact-w3-agileits">
								<h3>Formulaire d'inscription</h3>
				    			<form action="#" method="POST">
        							<div class="form-sub-w3ls">
		    							<input placeholder="nom"  type="text" name="nom" required="">
										<div class="icon-agile">
    										<i class="fa fa-user" aria-hidden="true"></i>
										</div>
									</div>
									<div class="form-sub-w3ls">
										<input placeholder="prenom"  type="text" name="prenom" required="">
										<div class="icon-agile">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
									</div>
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
									<div class="form-sub-w3ls">
										<input placeholder="confirmer votre mot de passe"  type="password" name="mdpv" required="">
										<div class="icon-agile">
											<i class="fa fa-unlock-alt" aria-hidden="true"></i>
										</div>
									</div>
								</div>
	    						<div class="submit-w3l">
									<input type="submit" value="Register">
								</div>
						</form>
<?php
    if(!empty($_POST['mail']))
    {
        
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $mail=$_POST['mail'];
        $mdp=($_POST['mdp']);
        $mdpv=($_POST['mdpv']); 

        if($mdp==$mdpv)
        {
            if(preg_match('#^(?=.*[A-Z])(?=.*[0-9])#',$mdp))
            {
                $query=$db->prepare('SELECT COUNT(*) AS nbr FROM users WHERE mail =:mail');
                $query->bindValue(':mail',$mail, PDO::PARAM_STR);
                $query->execute();
                $mail_free=($query->fetchColumn()==0)?1:0;
                $query->CloseCursor();
                if(!$mail_free)
                {echo "<script> alert(\"Ce mail à déja été utilisé\");</script>";}
                else{
                    $query=$db->prepare('INSERT INTO users (nom, prenom, mail, mdp) VALUES (:nom, :prenom, :mail, :mdp)');

                    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
                    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
                    $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
                    $query->execute();
                    $query->CloseCursor();

                    echo "<script> alert(\"Votre compte a bien été créer\");</script>";
                }
            }
            else{ echo "<script> alert(\"Votre mot de passe n\'est pas valide, il doit contenir une majuscule et un chifre\");</script>"; }
        }
        else{echo "<script> alert(\"Mot de passe non vérifié\");</script>";}
    }
?>
        </Section>
	</body>
</html>