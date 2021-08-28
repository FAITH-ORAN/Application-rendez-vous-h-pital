<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
   
    <title>prise-rendez vous hopital</title>

</head>
<body style="background-color: aliceblue;">
      <!-- just use a number and class 'column' or 'columns' -->
     
      <h3 class="title" style="text-align: center;font-family: 'Lato';color:rgb(1, 1, 29);">Informations sur les patients ayant un rdv </h3>
  <div class="row">

    <div class="three columns">
    <button class="button-primary"><a href="/index.php" style="text-decoration: none; color:white">nouveau patient</a></button>
        <button class="button-primary"><a href="priserdv.php" style="text-decoration: none; color:white">nouveau rendez-vous</a></button>
        <button class="button-primary"><a href="listepatients.php" style="text-decoration: none; color:white">liste des patients</a></button>
        <button class="button-primary"><a href="listerdv.php" style="text-decoration: none; color:white">Liste des rendez-vos</a></button>
        <button class="button-primary"><a href="modifInfoP.php" style="text-decoration: none; color:white">modification info patient</a></button>
        <button class="button-primary">modification rendez-vous</button>
        <button class="button-primary">supprimer rendez-vous</button>
    </div>
    <div class="two-thirds column container" >
    <table class="u-full-width">
        <thead>
            <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>numéro de tél</th>
            <th>Email</th>
           </tr>
        </thead>
    <tbody>
    <?php
        $id=$_POST["id"];
        $serveur="localhost";
        $login="root";
        $pass="";
        try{
            $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $reponse = $connexion->query('SELECT * FROM patients WHERE id= '.$id);
            while ($donnees = $reponse->fetch()){
            ?>
            <tr>
             <td>
             <?php echo $donnees['id'];
             ?>
             </td>
             <td>
             <?php echo $donnees['lastname'];
             ?>
             </td>
             <td>
             <?php echo $donnees['firstname'];
             ?>
             </td>
             <td>
             <?php echo date("d-m-Y", strtotime($donnees['birthdate'])) ;
             ?>
             </td>
             <td>
             <?php echo $donnees['phone'];
             ?>
             </td>
             <td>
             <?php echo $donnees['mail'];
             ?>
             </td>
             
            </tr>


            <?php
            }

            $reponse->closeCursor(); // Termine le traitement de la requête
             //f
        }catch(PDOException $e){
            echo'echec : ' . $e->getMessage();
        
        }
        
    ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
           