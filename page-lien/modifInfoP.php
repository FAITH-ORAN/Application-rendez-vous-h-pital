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
     
      <h3 class="title" style="color:gray;text-align: center;font-family: 'Lato';">Modification informations patient</h3>
  <div class="row">

    <div class="three columns">
    <button class="button-primary"><a href="/index.php" style="text-decoration: none; color:white">nouveau patient</a></button>
        <button class="button-primary"><a href="priserdv.php" style="text-decoration: none; color:white">nouveau rendez-vous</a></button>
        <button class="button-primary"><a href="listepatients.php" style="text-decoration: none; color:white">liste des patients</a></button>
        <button class="button-primary"><a href="listerdv.php" style="text-decoration: none; color:white">Liste des rendez-vos</a></button>
        <button class="button-primary"><a href="modifInfoP.php" style="text-decoration: none; color:white">modification info patient</a></button>
        <button class="button-primary"><a href="modifrdv.php" style="text-decoration: none; color:white">Modification rendez-vous</a></button>
        <button class="button-primary"><a href="delaterdv.php" style="text-decoration: none; color:white">supprimer rendez-vous</a></button>
    </div>

    <div class="two-thirds column container" >
     <form method="post" action="update.php" >
       <h5>chercher le patient</h5>
            <div>
             <label for="name">Nom:</label>
             <input type="text"   name="name" id="name" class="u-full-width">
            </div> 
            <div>
                <label for="prenom">Prénom:</label>
                <input type="text"   name="prenom" id="prenom" class="u-full-width"> 
            </div>
            <h5>ou bien avec le Id du Patient</h5>
            <div>
                <label for="id">Id:</label>
                <input type="text"  name="id" id="id" class="u-full-width">
            </div>
            <div>
                <input type="submit" value="chercher" class="u-full-width" id="submit">
            </div>
     </form>
    </div>
    <script src="/script/modifPatient.js"></script>
 </body>
</html>