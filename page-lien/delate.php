<a href="/index.php" style="text-decoration: none;background-color:aqua; cursor:pointer; font-size:18px" >retour à la page d'acceuil</a>
<?php
$code=$_POST["code"];

$serveur="localhost";
$login="root";
$pass="";
try{ 
    $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql="DELETE FROM appointments
     WHERE id =:id";
     $req = $connexion->prepare($sql);
     $req->bindParam(':id', $code, PDO::PARAM_INT);
     $req->execute();
    echo "<br>suppression de rdv reussi";
} catch(PDOException $e){
    echo'echec : ' . $e->getMessage();

}

?>