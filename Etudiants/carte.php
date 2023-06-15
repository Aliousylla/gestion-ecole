<?php

include_once "etudiant.classe.php";
include_once "../Absences/absence.classe.php";
include_once "../commentaires/commentaire_classe.php";
include_once "../Incidents/incident_classe.php";
$etudiants_id=null;
if(isset($_GET['etudiants_id'])){
    $etudiants_id=$_GET['etudiants_id'];
}
// $users=User::finds($etudiants_id);
$etudiant=absences::findas($etudiants_id);
$etudiants=etudiants::find($etudiants_id);
$etudiantsnj=absences::findnj($etudiants_id);
$paiement=etudiants::paiement($etudiants_id);
$nbr_commentaire=Commentaire::nbr_commentaire($etudiants_id);
$nbr_incident=incident::nbr_incident($etudiants_id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="../public/css/style2.css">
</head>


<!-- <div class=" text-center text-light" role="alert">
<h3>Votre carte etudiant</h3>
</div> -->
<br>
<div id="container" style="background:url('../photos/background.webp')no-repeat center">

    <div class="iteme">
      <img src="../photos/osbt.png" alt="">
    </div>
    <div class="iteme"><h5>Omnia School of Business and Technology</h5></div>
    <div class="iteme"><h4>Carte Etudiant</h4></div>
    <div class="iteme">
     <img src="<?=$etudiants['chemin']?>" alt=""> 
     <div>
     <br>
       <h6><Span>Matricul :</Span><br>
      <Span><?=$etudiants['matricule']?></Span><br></h6>
     </div>
    </div>
    <div class="iteme">
      <h6 class="n1"> Nom :     <Span>    <?=$etudiants['nom']?></Span></h6>
      <h6 class="n2">Prenom : <Span><?=$etudiants['prenom']?> </Span></h6>
      <h6 class="n3">Nationalite : <Span><?=$etudiants['nationalite']?></Span></h6>
     <h6 class="n4"> Niveau : <Span><?=$etudiants['niveau']?></Span></h6>
      <h6 class="n5">Filiere : <Span><?=$etudiants['filiere']?></Span></h6>
      <h6 class="n6">Annee : <Span><?=$etudiants['promo']?></Span></h6>
    </div>
    <div class="iteme">
      <img src="../photos/qrcode.jpg" alt="" style="width: 100px; position: relative;height: 100px;object-fit: cover;">
      <div>
      <img src="<?=$etudiants['chemin']?>" alt="">
      </div>
    </div>
    <div class="iteme">
    <h1></h1>
    </div>
    <div class="iteme">
    <h6><i  class="fa fa-phone" aria-hidden="true"> <span>05 20 41 17 17 / 06 61 36 31 27</span> </i> </h6>
 
    </div>
    
</div>
<br>
<div id="container1"style="background:url('../photos/background.webp')no-repeat center" >
  <div class="itemes">
    <img src="../photos/osbt.png" alt="">
    
   
    
  </div>
  <div class="itemes"><h3>Royaume du Maroc</h3>
  <h5>Omnia School of Business and Technology</h5></div>
  <div class="itemes"> <img src="../photos/royaume.jpeg" alt=""></div>
  <div class="itemes">
    <H6> Omnia School of Business and Technology <br>
      06 61 36 31 27 / 05 22 69 52 75 / 05 20 41 17 17 <br>
      202 lotissement, Bd Haj Fateh, Casablanca <br>
      contact@osbt.ma</H6>
   
  </div>
  <div class="itemes">
   <h6><span>NB: La presente carte est delivree a l'interesse(e) pour servir et valoir ce que de droit.</span> 
  </h6> 
  </div>
  <div class="itemes">
  <h6><i  class="fa fa-phone" aria-hidden="true"> <span>www.osbt.ma</span> </i> </h6>
 
  </div>
  <div class="itemes">

  <h6><i class="fa-brands fa-facebook" aria-hidden="true"> <span>OmniaSchoolCasablanca</span> </i> </h6>
 
  </div>
  <div class="itemes">
    <img src="../photos/qrcode.jpg" alt="" style="width: 50px;">
  </div>
 
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-center m-5 d-print-none">
  <a style="text-decoration: none; background: blue; color: wheat; font-size: 1.2rem; border-radius: 10px; padding: 5px 10px ;" href="consulter_etudiants.php?etudiants_id=<?=$etudiants['etudiants_id']?>"  >Modifier</a> 
  <a onclick="window.print()" style="text-decoration: none; background: green; color: wheat; font-size: 1.2rem; border-radius: 10px; padding: 5px 10px ;"href="" >Imprimer</a>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>