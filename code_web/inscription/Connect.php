<?php
/* connection à la base de donnée*/

try
{
$db = new PDO('mysql:host=localhost;dbname=projetweb', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>


