<?php session_start(); ?>
<a href="/index.php" style="text-decoration: none;background-color:aqua; cursor:pointer; font-size:18px" >retour à la page d'acceuil</a>
<?php
$name=$_POST["name"];
$prenom=$_POST["prenom"];
$date=$_POST["date"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];



// pour l'affichage de la date de naissance format français echo date("d-m-Y", strtotime($_POST['date']));

$var=$_SESSION["infoID"];
$serveur="localhost";
$login="root";
$pass="";
try{ 
    $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'UPDATE patients
    SET lastname = :lastname,
        firstname= :firstname,
        birthdate=:birthdate,
        phone=:phone,
        mail=:mail
    
    WHERE id =:id';
$statement = $connexion->prepare($sql);
$statement->bindParam(':id', $var, PDO::PARAM_INT);
$statement->bindParam(':lastname', $_POST["prenom"]);
$statement->bindParam(':firstname',$_POST["name"]);
$statement->bindParam(':birthdate',$_POST["date"]);
$statement->bindParam(':phone', $_POST["phone"]);
$statement->bindParam(':mail', $_POST["mail"]);
$statement->execute();

  
    echo "connexion à la base de donnée reussi<br>";
    echo "mise a jour reussi";


}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();

}
?>