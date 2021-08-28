<a href="/index.php" style="text-decoration: none;background-color:aqua; cursor:pointer; font-size:18px" >retour à la page d'acceuil</a>
<?php
$code=$_POST["code"];
$date=$_POST["date"];
$serveur="localhost";
$login="root";
$pass="";
try{ 
    $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'UPDATE appointments
    SET dateHour = :dateHour
    WHERE id =:id';
    $statement = $connexion->prepare($sql);
    $statement->bindParam(':id', $code, PDO::PARAM_INT);
    $statement->bindParam(':dateHour',$_POST["date"]);
    $statement->execute();
    echo "<br> rdv mis à jour avec succée";
} catch(PDOException $e){
    echo'echec : ' . $e->getMessage();

}

?>