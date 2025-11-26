<form action="supprimervoyage.php" method="POST">
Introduire l'id : <input type="text" name="id">
<input type="submit" value="Envoi">
</form>
<?php
if (!empty($_POST))
{
$id=$_POST['id'];

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

// execution de la requete d insertion
$sqlQuery = "DELETE FROM voyage WHERE id_voyage=$id";
$requete = $db->prepare($sqlQuery);
$requete->execute();
if($requete){
    echo'<script>alert("suppression avec succés");</script>' ;
}else{
     echo'<script>alert(" la suppression a échoué");</script>' ;
}
}
?>