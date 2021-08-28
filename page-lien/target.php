
<a href="/index.php" style="text-decoration: none;background-color:aqua; cursor:pointer; font-size:18px" >retour à la page d'acceuil</a>
<?php
$date=$_POST["meeting-time"];
$id=$_POST["id"];

$serveur="localhost";
$login="root";
$pass="";
try{
    $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $requette=$connexion->prepare("INSERT INTO appointments(dateHour,idPatients)
    Values(:dateHour,:idPatients)");//première étape
      $requette->bindParam(':dateHour',$date);//deuxième étape
      $requette->bindParam(':idPatients',$id);
      $requette->execute();//execute
      echo"<br>connexion à la base de donnée hôpital reussi<br>";
      echo "information du nouveau patient ajouté à la bdd";
}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();
}






?>