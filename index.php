<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" href="style.css">
    <title>prise-rendez vous hopital</title>

</head>
<body>
      <!-- just use a number and class 'column' or 'columns' -->
      <div>
      <h3 class="title" >Information Nouveau Patient</h3>
      </div>
  <div class="row">

  
    <div class="three columns">
        
        <button class="button-primary"><a href="index.php" style="text-decoration: none; color:white">nouveau patient</a></button>
        <button class="button-primary"><a href="page-lien/priserdv.php" style="text-decoration: none; color:white">nouveau rendez-vous</a></button>
        <button class="button-primary"><a href="page-lien/listepatients.php" style="text-decoration: none; color:white">listes de patients</a></button>
        <button class="button-primary"><a href="page-lien/listerdv.php" style="text-decoration: none; color:white">Liste des rendez-vos</a></button>
        <button class="button-primary"><a href="page-lien/modifInfoP.php" style="text-decoration: none; color:white">modification info patient</a></button>
        <button class="button-primary"><a href="page-lien/modifrdv.php" style="text-decoration: none; color:white">modification rendez-vous</a></button>
        <button class="button-primary"><a href="page-lien/delaterdv.php" style="text-decoration: none; color:white">supprimer rendez-vous</a></button>
   
       
    </div>

    <div class="two-thirds column container" >
    <form method="post" action="page-lien/traitement.php" id="job-form">
            <div>
             <label for="job">Nom:</label>
             <input type="text" id="lastname" name="nom" class="u-full-width">
            </div> 
            <div>
                <label for="company">Prénom:</label>
                <input type="text" id="firstname" name="prenom" class="u-full-width"> 
            </div>
            <div>
                <label for="date">Date de naissance:</label>
                <input type="date" id="date" name="date" class="u-full-width">
            </div>
            <div>
                <label for="phone">Numéro de téléphone:</label>
                <input type="text" id="phone" name="phone" class="u-full-width">
            </div>
            <div>
                <label for="mail">Adresse mail:</label>
                <input type="email" id="mail" name="mail" class="u-full-width">
            </div>
            <div>
                <input type="submit" value="ajouter" class="u-full-width" id="submit">
            </div>
        </form>
    </div>
  </div>
  <script src="/script/main.js"></script>
</body>
</html>