<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajoutervoyage.php" method="POST">
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
// execution de la requete d insertion
$sqlQuery = "INSERT INTO voyage(id_voyage,destination,date_depart,heure_depart,date_retour,heure_retour,prix)
VALUES('$id','$destination','$date_depart','$heure_depart','$date_retour','$heure_retour','$prix')";
$requete = $db->prepare($sqlQuery);
$requete->execute();
  if($requete){
     echo '<script>alert("création de voyage avec succès");</script>';
  }else{
    echo '<script>alert("création de voyage a échoué");</script>';
  }  



   }
?>