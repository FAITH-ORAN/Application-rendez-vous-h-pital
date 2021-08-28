<?php session_start(); ?>

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
     
      <h3 class="title" style="text-align: center;font-family: 'Lato';color:rgb(1, 1, 29);">Modification informations patient</h3>
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
      <form method="post" action="trai.php" id="job-form">
      <div>
      <?php
        $id=$_POST["id"];
        $firstname=$_POST["name"];
        $lastname=$_POST["prenom"];  
        
       
        $serveur="localhost";
        $sql="SELECT firstname,lastname,id FROM patients WHERE firstname LIKE '$firstname%'";
        $login="root";
        $pass="";
        try{
            $connexion= new PDO ("mysql:host=$serveur;dbname=hôpital",$login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<script>function myFunction() {
                setTimeout(function(){ alert('Veuillez modifier les informations du patient'); }, 2000);
              } myFunction();</script>";//i use script in echo ,settimeout to alert after 2sec after loading the page


            if($id){
            $reponse = $connexion->query('SELECT firstname,lastname,id FROM patients WHERE id= '.$id);
            }else {
            $reponse = $connexion->query($sql);
            }
            $donnees = $reponse->fetch();
            $infoID=$donnees["id"];
            $_SESSION['infoID'] = $infoID;

            ?>

           
             <label for="name">Nom:</label>
             <input type="text"   name="name" id="name" class="u-full-width" value="<?php echo $donnees["firstname"]?>">
            </div> 
            <div>
                <label for="prenom">Prénom:</label>
                <input type="text"   name="prenom" id="prenom" class="u-full-width" value="<?php echo $donnees["lastname"]?>"> 
            </div>
            <div>
                <label for="date">Date de naissance:</label>
                <input type="date"  name="date" id="date" class="u-full-width">
            </div>
            <div>
                <label for="phone">Téléphone:</label>
                <input type="text"  name="phone" id="phone" class="u-full-width">
            </div>
            <div>
                <label for="mail">Email:</label>
                <input type="text"  name="mail" id="mail" class="u-full-width">
            </div>
            <div>
                <label for="idPatient">id:</label>
                <div><?php echo  $infoID?></div>
            </div>
            <div>
                <input type="submit" value="modifier" class="u-full-width" id="submit">
            </div>
            <?php
           
        }catch(PDOException $e){
            echo'echec : ' . $e->getMessage();
        
        }
            ?>

      </form>
      <script>
 let submitButton=document.getElementById("submit");
submitButton.addEventListener("click",(e)=>{
let lastName=document.getElementById("name").value;
let firstName=document.getElementById("prenom").value;
let date=document.getElementById("date").value;
let phone=document.getElementById("phone").value;
let mail=document.getElementById("mail").value;
if(lastName=== ""||firstName=== ""||date===""||phone===""||mail===""){
    e.preventDefault();
    alert("svp entrez les informations manquantes");
   
}else  {
    alert("aller à la page de traitement");
}


})
      </script>
     </div>