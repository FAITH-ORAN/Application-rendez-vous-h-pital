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
     
      <h3  style=" color:green;text-align: center;font-family:Lato;">Modifier rendez-vous </h3>
  <div class="row">

    <div class="three columns">
    <button class="button-primary"><a href="/index.php" style="text-decoration: none; color:white">nouveau patient</a></button>
        <button class="button-primary"><a href="priserdv.php" style="text-decoration: none; color:white">nouveau rendez-vous</a></button>
        <button class="button-primary"><a href="listepatients.php" style="text-decoration: none; color:white">liste des patients</a></button>
        <button class="button-primary"><a href="listerdv.php" style="text-decoration: none; color:white">Liste des rendez-vos</a></button>
        <button class="button-primary"><a href="modifInfoP.php" style="text-decoration: none; color:white">modification info patient</a></button>
        <button class="button-primary"><a href="modifrdv.php" style="text-decoration: none; color:white">modification rendez-vous</a></button>
        <button class="button-primary"><a href="delaterdv.php" style="text-decoration: none; color:white">supprimer rendez-vous</a></button>
    </div>
    <div class="two-thirds column container" >
    <table class="u-full-width">
        <thead>
             <th>Code rdv</th>
                <th>RDV</th>
                 <th>Nom et prénom</th> 
                <th>Id du patients</th>
                
           
        </thead>
        <tbody>
        <?php
        $serveur="localhost";
        $login="root";
        $pass="";
        try{
            $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $reponse = $connexion->query('SELECT appointments.dateHour,appointments.idPatients,appointments.id,patients.lastname,patients.firstname 
            FROM appointments
            INNER JOIN patients
            ON appointments.idPatients = patients.id
             ORDER BY dateHour');
           
            
       
            while ($donnees = $reponse->fetch()){
            ?>
            <tr>
            <td>
             <?php echo $donnees["id"] ;
             ?>
             </td>
                
             <td>
             <?php echo  date("d-m-Y-g:i", strtotime($donnees['dateHour']));
             ?>
             </td>
             <td>
             <?php echo $donnees['lastname']." ".$donnees['firstname']; ;
             ?>
             </td>
             <td>
             <?php echo $donnees['idPatients'];
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
     <form method="post" action="updateRdv.php" id="job-form">
              <label for="code">Pour modifier le rdv veuillez entrer le code rdv concerné :</label>
             <input type="text" id="id" name="code"  placeholder="code rdv">
             <div>
             <label for="date">Nouvelle date:</label>
            <input type="datetime-local" id="meeting-time"
             name="date" value="-08:00">
     
            </div>
             <input style="margin-left:6px" type="submit" value="modifier le rdv"  id="submit">
             </form>
    </div> 
    <script ></script>
 </body>
</html>