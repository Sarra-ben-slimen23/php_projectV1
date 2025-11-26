<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editervoyage.php" method="POST">
     id_voyage:<input type="text" name="id">
     destination:<input type="text" name="destination">
     date_depart:<input type="text" name="date_depart">
     heure_depart:<input type="text" name="heure_depart">
     date_retour:<input type="text" name="date_retour">
     heure_retour:<input type="text" name="heure_retour">
     prix:<input type="text" name="prix">
     <input type="submit" value="envoyer">
  </form>


</body>
</html>
<?php
    if (!empty($_POST)){
     $id=$_POST['id'];
     $destination=$_POST['destination'];
     $date_depart=$_POST['date_depart'];
     $heure_depart=$_POST['heure_depart'];
     $date_retour=$_POST['date_retour'];
     $heure_retour=$_POST['heure_retour'];
     $prix=$_POST['prix'];
     try
{
$db =new PDO('mysql:host=localhost;dbname=agencevoyage;charset=utf8',
'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
$sqlQuery = "UPDATE voyage SET
id_voyage='$id',destination='$destination',date_depart='$date_depart',heure_depart='$heure_depart',
date_retour='$date_retour',heure_retour='$heure_retour',prix='$prix'
WHERE id_voyage=$id";
$requete = $db->prepare($sqlQuery);
$requete->execute();

if($requete){
     echo '<script>alert("édition de voyage avec succès");</script>';
  }else{
    echo '<script>alert("édition de voyage a échoué");</script>';
  }  

 }
?>