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
    <title>Modifier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style2.css">
</head>
<body>


<div class="container bg-primary mt-5 shadow-lg">
  <div class="row">
       
    <div class="col bg-light p-5">
    <form action="update.php" class="row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data">

  <div class="col-md-4">
    <input type="hidden" value="<?=$etudiants['etudiants_id']?>" name="etudiants_id" id="etudiants_id">
    <label for="nom" class="form-label">Nom</label>
    <input value="<?=$etudiants['nom']?>" required type="text" class="form-control" id="Nom" required name="nom">
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="Prenom" class="form-label">prenom</label>
    <input  value="<?=$etudiants['prenom']?>" required type="text" class="form-control" id="Prenom" name="prenom" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="matricul" class="form-label">Matricul</label>
    <input  value="<?=$etudiants['matricule']?>" required type="text" class="form-control" id="Matricul" name="matricul" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="adresse" class="form-label">Adresse</label>
    <input value="<?=$etudiants['adresse']?>" required type="text" class="form-control" id="Adresse" name="adresse" required>
    <div class="valid-feedback">
    </div>
    </div>
    <div class="col-md-4">
    <label for="tel" class="form-label">Telephone</label>
    <input value="<?=$etudiants['telephone']?>" required type="text" class="form-control" id="tel" required name="tel">
    <div class="valid-feedback">
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="email" class="form-label">Email</label>
    <input value="<?=$etudiants['email']?>" required type="text" class="form-control" id="email" required name="email">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="date_naissance" class="form-label">Dete de naissance</label>
    <input value="<?=$etudiants['date_naissance']?>" required type="date" class="form-control" id="cp" required name="date_naissance">
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="lieu_naissance" class="form-label">Lieu de naissance</label>
    <input value="<?=$etudiants['lieu_naissance']?>" required type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-4">
    <label for="nationalite" class="form-label">Nationalite</label>
    <input value="<?=$etudiants['nationalite']?>" required type="text" class="form-control" id="Nationalite" name="nationalite" required>
    <div class="valid-feedback">
    </div>
    </div>
    <div class="col-md-4">
    <label for="cp" class="form-label">Passepord ou cin</label>
    <input value="<?=$etudiants['passeport_cin']?>" required type="text" class="form-control" id="cp" required name="cp">
    <div class="valid-feedback">
    </div>
  </div>
  

 

  <div class="col-md-4">
    <label for="filiere" class="form-label">Filiere</label>
    <select value="<?=$etudiants['niveau']?>" required class="form-select" id="Filiere" required name="filiere">
      <option selected disabled value=""><?=$etudiants['filiere']?></option>
      <option>DI</option>
    </select>
    
  </div>
  <div class="col-md-4">
    <label for="niveau" class="form-label">Niveau</label>
    <select value="<?=$niveau?>" required class="form-select" id="Niveau" required name="niveau">
      <option selected disabled value=""><?=$etudiants['niveau']?></option>
      <option>TS1</option>
      <option>TS2</option>
      <option>MI1</option>
      <option>MI2</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-4">
    <label for="anne" class="form-label">Annee scolaire</label>
    <select value="<?=$anne?>" required class="form-select" id="annee" required name="anne">
      <option selected disabled value=""><?=$etudiants['promo']?></option>
      <option>2022 / 2023</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>

  <!-- <div class="col-md-4">
    <label for="photo" class="form-label">photo</label>
    <input value="<?=$etudiants['chemin']?>" required type="file" class="form-control" id="photo" name="photo" required>
    <div class="valid-feedback">
    </div>
  </div> -->

  <h1>contact urgence</h1>

<div class="col-md-4">
  <label for="parente" class="form-label">parente</label>
  <select class="form-select" id="parente" required name="parente">
    <option selected disabled value=""><?=$etudiants['parente']?></option>
    <option>pere</option>
    <option>mere</option>
    <option>oncle</option>
    <option>autre membre de la famille</option>
  </select>
</div>


<div class="col-md-4">
  <label for="nom_parent" class="form-label">nom_parent</label>
  <input value="<?=$etudiants['nom_parent']?>" type="text" class="form-control" id="nom_parent" required name="nom_parent">
  <div class="valid-feedback">
  </div>
</div>

<div class="col-md-4">
  <label for="prenom_parent" class="form-label">prenom_parent</label>
  <input value="<?=$etudiants['prenom_parent']?>" type="text" class="form-control" id="prenom_parent" name="prenom_parent" required>
  <div class="valid-feedback">
  </div>
</div>

<div class="col-md-4">
  <label for="adresse_parent" class="form-label">adresse_parent</label>
  <input value="<?=$etudiants['adresse_parent']?>" type="text" class="form-control" id="adresse_parent" name="adresse_parent" required>
  <div class="valid-feedback">
  </div>
  </div>
  <div class="col-md-4">
  <label for="telephone_parent" class="form-label">telephone_parent</label>
  <input value="<?=$etudiants['telephone_parent']?>" type="text" class="form-control" id="telephone_parent" required name="telephone_parent">
  <div class="valid-feedback">
  </div>
</div>

<div class="col-md-4">
  <label for="email_parent" class="form-label">email_parent</label>
  <input value="<?=$etudiants['email_parent']?>" type="text" class="form-control" id="email_parent" required name="email_parent">
  <div class="valid-feedback">
  </div>
</div>

 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Modifier</button>
  </div>
</form>   
</div>
  </div>
</div>
</div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>