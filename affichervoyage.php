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


$sqlQuery = 'SELECT * FROM voyage';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();

echo "<table border='1'>
<tr>
<th>id_voyage</th>
<th>destination</th>
<th>date_depart</th>
<th>heure_depart</th>
<th>date_retour</th>
<th>heure_retour</th>
<th>prix</th>
</tr>";
foreach ($res as $et) {
echo "<tr>";
echo ' <td> '.$et['id_voyage'].'</td><td>'.$et['destination'].'</td><td>'.$et['date_depart'].'</td><td>'.$et['heure_depart'].'</td><td>'.$et['date_retour'].'</td><td>'.$et['heure_retour'].'</td><td>'.$et['prix'].'</td>'; 
echo "</tr>";
}
echo "</table>";

?>