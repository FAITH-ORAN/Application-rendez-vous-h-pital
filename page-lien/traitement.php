
<a href="/index.php" style="text-decoration: none;background-color:aqua; cursor:pointer; font-size:18px" >retour à la page d'acceuil</a>
<?php
$firstname=$_POST["prenom"];
$lastname=$_POST["nom"];
$date=$_POST["date"];
$phone=$_POST["phone"];
$mail=$_POST["mail"];



// pour l'affichage de la date de naissance format français echo date("d-m-Y", strtotime($_POST['date']));


$serveur="localhost";
$login="root";
$pass="";
try{
    $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requette=$connexion->prepare("INSERT INTO patients(lastname,firstname,birthdate,phone,mail)
                                    Values(:lastname,:firstname,:birthdate,:phone,:mail)"); //première étape
                                     $requette->bindParam(':lastname',$lastname);//deuxième étape
                                     $requette->bindParam(':firstname',$firstname);
                                     $requette-> bindParam(':birthdate',$date); 
                                     $requette-> bindParam(':phone',$phone);
                                     $requette-> bindParam(':mail',$mail);
    $requette->execute();//executer
    echo "<br>connexion à la base de donnée hopital est reussi<br>";
    echo "information du nouveau patient ajouté à la bdd";
}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();

}
?>