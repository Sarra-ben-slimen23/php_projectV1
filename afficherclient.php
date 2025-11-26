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
$sqlQuery = 'SELECT * FROM client';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();
echo"<table border='1'>
<tr>
<th>cin</th>
<th>nom</th>
<th>prenom</th>
<th>age</th>
<th>genre</th>

</tr>";

foreach ($res as $et) {
echo '<tr><td>'.$et['cin'].'</td><td>'.$et['nom'].'</td><td>'.$et['prenom'].'</td><td>'.$et['age'].'</td><td>'.$et['genre'].'</td>'; 
echo '</tr>';
}
echo "</table>";

?>