<?php 
$titre_idee=$_POST['titre_idee'];
$description=$_POST['description'];
$date_event=$_POST['date_event'];
$bdd = new PDO('mysql:host=localhost;dbname=projetweb;charset=utf8', 'root', '');
$requete1 = $bdd->prepare("INSERT INTO evenement (`nom`, `dateevent`, `description`, `ID_user`) VALUES (:titre_idee, :date_event, :description, 1)");
$requete1->bindValue(':titre_idee', $titre_idee, PDO::PARAM_STR);
$requete1->bindValue(':date_event', $date_event, PDO::PARAM_STR);
$requete1->bindValue(':description', $description, PDO::PARAM_STR);
$requete1->execute();

echo $titre_idee;
echo $description;
echo $date_event;


?>
