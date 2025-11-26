<?php
//connexion à la base de données
try
{
$db =new PDO('mysql:host=localhost;dbname=agencevoyage;charset=utf8',
'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

// On récupère tout le contenu de la table gestionclient
$sqlQuery = 'SELECT * FROM reservation';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();
// On affiche chaque etudiant
foreach ($res as $et) {
echo 'id : '.$et['id_reservation'].'  cin : '.$et['cin'].' id_voyage:'.$et['id_voyage']; 
echo '<br>';
}
