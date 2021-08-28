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
     
      <h3 class="title" style="text-align: center;font-family: 'Lato';color:rgb(1, 1, 29);">Tableau de bord de prise de rendez-vous</h3>
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
    <form method="post" action="target.php" id="job-form">
        
            <div>
            <input type="datetime-local" id="meeting-time"
             name="meeting-time" value="-08:00">
     
            </div>
            <div>
                <label for="id">idPatients:</label>
                <input type="text" id="id" name="id" class="u-full-width" > 
            </div>
            <div>
                <input type="submit" value="ajouter rdv" class="u-full-width" id="submit">
            </div>
        </form>
    </div>
  </div>
  <script src="/script/mainrdv.js"></script>
<body>
    
</body>
</html>